var app = angular.module('app', []);

app.factory('Hello', function(){
	var Hello = {};
	Hello.index = 0;
	//http://api.worldbank.org/countries/br?format=json
	Hello.countries = ["sk", "uk", "ru", "jp", "fr", "af", "au", "ne", "ca", "us", "cn", "br", "mx", "cl", "co", "za", "ke", "eg", "id", "sa", "in", "pt", "it", "pe", "ao", "bo", "is", "se", "ua"];
	Hello.capitals = [
		{
			"country": "sk",
			"capital": 'Bratislava',
			"lat": 48.145892,
			"long": 17.107137,
			"hello": ""
		},
		{
			"country": "uk",
			"capital": 'London',
			"lat": 51.511214,
			"long": -0.119824,
			"hello": ""
		},
		{
			"country": "ru",
			"capital": 'Moscow',
			"lat": 55.755826,
			"long": 37.617300,
			"hello": ""
		},
		{
			"country": "jp",
			"capital": 'Tokyo',			
			"lat": 35.689487,
			"long": 139.691706,
			"hello": ""
		},
		{
			"country": "fr",
			"capital": 'Paris',
			"lat": 48.856614,
			"long": 2.352222,
			"hello": ""
		},
		{
			"country": "af",
			"capital": 'Kabul',
			"lat": 34.528455,
			"long": 69.171703,
			"hello": ""
		},
		{
			"country": "au",
			"capital": 'Canberra',
			"lat": -35.282000,
			"long": 149.128684,
			"hello": ""
		},
		{
			"country": "ne",
			"capital": 'Niamey',
			"lat": 13.512668,
			"long": 2.112516,
			"hello": ""
		},
		{
			"country": "ca",
			"capital": 'Ottawa',
			"lat": 45.421530,
			"long": -75.697193,
			"hello": ""
		},
		{
			"country": "us",
			"capital": 'Washington, D.C.',
			"lat": 38.907231,
			"long": -77.036464,
			"hello": ""
		},
		{
			"country": "cn",
			"capital": 'Beijing',
			"lat": 39.904030,
			"long": 116.407526,
			"hello": ""
		},
		{
			"country": "br",
			"capital": 'Brasília',
			"lat": -15.792110,
			"long": -47.897751,
			"hello": ""
		},
		{
			"country": "mx",
			"capital": 'Mexico City',
			"lat": 19.432608,
			"long": -99.133208,
			"hello": ""
		},
		{
			"country": "cl",
			"capital": 'Santiago',
			"lat": -33.469120,
			"long": -70.641997,
			"hello": ""
		},
		{
			"country": "co",
			"capital": 'Bogota',
			"lat": 4.570868,
			"long": -74.297333,
			"hello": ""
		},
		{
			"country": "za",
			"capital": 'Pretoria',
			"lat": -25.731340,
			"long": 28.218370,
			"hello": ""
		},
		{
			"country": "ke",
			"capital": 'Nairobi',
			"lat": -1.292066,
			"long": 36.821946,
			"hello": ""
		},
		{
			"country": "eg",
			"capital": 'Cairo',
			"lat": 30.044420,
			"long": 31.235712,
			"hello": ""
		},
		{
			"country": "id",
			"capital": 'Jakarta',
			"lat": -6.208763,
			"long": 106.845599,
			"hello": ""
		},
		{
			"country": "sa",
			"capital": 'Riyadh',
			"lat": 24.711667,
			"long": 46.724167,
			"hello": ""
		},
		{
			"country": "in",
			"capital": 'New Delhi',
			"lat": 28.635308,
			"long": 77.224960,
			"hello": ""
		},
		{
			"country": "pt",
			"capital": 'Lisbon',
			"lat": 38.722252,
			"long": -9.139337,
			"hello": ""
		},
		{
			"country": "it",
			"capital": 'Rome',
			"lat": 41.892916,
			"long": 12.482520,
			"hello": ""
		},
		{
			"country": "pe",
			"capital": 'Lima',
			"lat": -12.047816,
			"long": -77.062203,
			"hello": ""
		},
		{
			"country": "ao",
			"capital": 'Luanda',
			"lat": -8.838333,
			"long": 13.234444,
			"hello": ""
		},
		{
			"country": "bo",
			"capital": 'Sucre',
			"lat": -19.042139,
			"long": -65.255882,
			"hello": ""
		},
		{
			"country": "is",
			"capital": 'Reykjavik',
			"lat": 64.135338,
			"long": -21.895210,
			"hello": ""
		},
		{
			"country": "se",
			"capital": 'Stockholm',
			"lat": 59.328930,
			"long": 18.064910,
			"hello": ""
		},
		{
			"country": "ua",
			"capital": 'Kiev',
			"lat": 50.450100,
			"long": 30.523400,
			"hello": ""
		}
	];
	return Hello;
});

function HelloListCtrl($scope, Hello) {
	window.MY_SCOPE = $scope;
	$scope.hello = Hello;
}



app.directive("addcity", function($http){
	return function(scope, element, attrs){
		element.bind("click", function(){
//			console.log(scope.hello.capitals[scope.hello.index]);

		$http.get('https://hellosalut.stefanbohacek.com/?cc=' + scope.hello.capitals[scope.hello.index]['country']).then(function(result){			
			return(app.updateHello(result['data']['code'], result['data']['hello']));
		});


		});
	};
});

app.fetchCapitals = function($http){
	var scope = window.MY_SCOPE;
	for (capital in scope.hello.newcapitals){
		scope.hello.newcapitals[capital].capital = 'TEST';
	}
}

app.updateHello = function(country, hello){
	var scope = window.MY_SCOPE;

	var infowindow = new google.maps.InfoWindow({
		content: hello
	});
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(scope.hello.capitals[scope.hello.index]['lat'], scope.hello.capitals[scope.hello.index]['long']),
		map: map,
		animation: google.maps.Animation.DROP,
		title: scope.hello.capitals[scope.hello.index]['capital']
	});
	infowindow.open(map,marker);

	if (scope.hello.index < scope.hello.capitals.length - 1){
		setTimeout(function(){
			scope.hello.index++;
			document.getElementById('hello-title').click();			
		},1234);
	}
};
