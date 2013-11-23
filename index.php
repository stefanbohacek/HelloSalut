<?php

$hellosalut = array(
	"code" => "none",
	"country" => "none",
	"hello" => "Hello"
);

function getHelloFromLang($lang) {
		$connection = mysqli_connect(getenv('OPENSHIFT_MYSQL_DB_HOST'), getenv('OPENSHIFT_MYSQL_DB_USERNAME'), getenv('OPENSHIFT_MYSQL_DB_PASSWORD'), "hellosalut", getenv('OPENSHIFT_MYSQL_DB_PORT'));

		if (mysqli_connect_errno($connection)){
			echo "Failed to connect to the database: " . mysqli_connect_error();
		}

		$query = "SELECT 
				cc.country,
				cc.hello
			FROM 
				ip2nationCountries cc
			WHERE 
				cc.language = ?";
		$stmt = $connection->prepare($query);
		$stmt->bind_param("s", $lang);
		$stmt->execute();
		$stmt->bind_result($country, $hello);
		$stmt->fetch();

		if (!is_null($hello)){
			global $hellosalut;

			$hellosalut["code"] = $lang;
			$hellosalut["country"] = $country;
			$hellosalut["hello"] = $hello;
		}
	}


function getHelloFromIP($ipRaw) {
		$ip = sprintf("%u\n", ip2long($ipRaw));
		$connection = mysqli_connect(getenv('OPENSHIFT_MYSQL_DB_HOST'), getenv('OPENSHIFT_MYSQL_DB_USERNAME'), getenv('OPENSHIFT_MYSQL_DB_PASSWORD'), "hellosalut", getenv('OPENSHIFT_MYSQL_DB_PORT'));

		if (mysqli_connect_errno($connection)){
			echo "Failed to connect to the database: " . mysqli_connect_error();
		}

		$query = "SELECT 
				cc.code,
				cc.country,
				cc.hello
			FROM 
				ip2nationCountries cc,
				ip2nation ip 
			WHERE 
				ip.ip < ? 
			AND 
				cc.code = ip.country 
			ORDER BY 
				ip.ip DESC
			LIMIT 0,1";

		$stmt = $connection->prepare($query);
		$stmt->bind_param("i", $ip);
		$stmt->execute();
		$stmt->bind_result($code, $country, $hello);
		$stmt->fetch();


		if (!is_null($hello)){
			global $hellosalut;

			$hellosalut["code"] = $code;
			$hellosalut["country"] = $country;
			$hellosalut["hello"] = $hello;
		}
	}
 
if (!isset($_REQUEST['ip']) && !isset($_REQUEST['lang'])) {
	echo "Please see <a href='http://hellosalut-ftfish.rhcloud.com/hello/'>http://hellosalut-ftfish.rhcloud.com/hello/</a> for details on how to use this service.";
}
else{
	if (isset($_REQUEST['lang'])) {
		getHelloFromLang($_REQUEST['lang']);
	}
	else{
		if (isset($_REQUEST['ip'])) {
			getHelloFromIP($_REQUEST['ip']);
		}
	}
	echo json_encode($hellosalut);	
}



?>