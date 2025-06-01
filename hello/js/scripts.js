$(document).ready(function(){
	$('a[href*=#]:not([href=#])').click(function(el) {
		if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				el.preventDefault();
				$('html,body').animate({
					scrollTop: target.offset().top-70
				}, 1000, function(){
//					history.pushState({id: 'SOME ID'}, '', target.selector);
				});
				console.log(el.isDefaultPrevented());
				return false;
			}
		}
	});

	$("#globe").delay(1500)
		.on("click", function(){
			$("#globe").attr("class", "fa fa-cog fa-spin");
			var countries = ["ba", "cs", "si", "rs", "bg", "al", "ee", "hu", "lv", "tr", "cg", "bj", "bi", "fr", "cf", "bf", "pf", "cm", "tf", "gf", "ro", "kz", "az", "la", "cu", "ao", "pt", "br", "fi", "lu", "mm", "lt", "bt", "ph", "ke", "ec", "co", "es", "uy", "cr", "pe", "ve", "mx", "cl", "ad", "ar", "bo", "pr", "ie", "us", "uk", "io", "gy", "vg", "mt", "ag", "za", "as", "bb", "au", "vi", "ai", "jm", "aq", "bs", "ca", "bz", "nz", "eu", "cy", "ck", "01", "cc", "bm", "ne", "bw", "se", "dk", "no", "bv", "an", "id", "ch", "aw", "nl", "de", "be", "my", "bn", "is", "at", "pl", "it", "vn", "fj", "ht", "hr", "sk", "cz", "gr", "kh", "kp", "kr", "ge", "th", "bd", "sg", "in", "np", "cn", "tw", "hk", "bh", "ae", "dz", "om", "sa", "iq", "pk", "ir", "af", "eg", "il", "am", "jp", "ua", "ru", "mn", "mk", "by",];
			var code =  countries[Math.floor(Math.random()*countries.length)];
			$.get("https://hellosalut.stefanbohacek.com/?cc=" + code, function(data){
				$("#hello").html(data.hello);
				console.log(data);
			});
			code =  countries[Math.floor(Math.random()*countries.length)];
			$.get("https://hellosalut.stefanbohacek.com/?cc=" + code, function(data){
				$("#salut").html(data.hello.toLowerCase());
				$("#globe").attr("class", "fa fa-globe");
				console.log(data);
			});
		});


});