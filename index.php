<?php
$hellosalut = array(
	"code" => "none",
	"country" => "none",
	"hello" => "Hello"
);

function getIP() {
/*
  Source: http://admincmd.blogspot.com/2007/08/php-get-client-ip-address.html
*/
  $ip;
  if (getenv("HTTP_CLIENT_IP")) 
    $ip = getenv("HTTP_CLIENT_IP"); 
  else if(getenv("HTTP_X_FORWARDED_FOR")) 
    $ip = getenv("HTTP_X_FORWARDED_FOR"); 
  else if(getenv("REMOTE_ADDR")) 
    $ip = getenv("REMOTE_ADDR"); 
  else 
    $ip = "UNKNOWN";
  return $ip; 
}
/*
Source: http://www.dyeager.org/blog/2008/10/getting-browser-default-language-php.html
*/

function getDefaultLanguage() {
   if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]))
      return parseDefaultLanguage($_SERVER["HTTP_ACCEPT_LANGUAGE"]);
   else
      return parseDefaultLanguage(NULL);
   }

function parseDefaultLanguage($http_accept, $deflang = "en") {
   if(isset($http_accept) && strlen($http_accept) > 1)  {
      # Split possible languages into array
      $x = explode(",",$http_accept);
      foreach ($x as $val) {
         #check for q-value and create associative array. No q-value means 1 by rule
         if(preg_match("/(.*);q=([0-1]{0,1}\.\d{0,4})/i",$val,$matches))
            $lang[$matches[1]] = (float)$matches[2];
         else
            $lang[$val] = 1.0;
      }
      $qval = 0.0;
      foreach ($lang as $key => $value) {
         if ($value > $qval) {
            $qval = (float)$value;
            $deflang = $key;
         }
      }
   }
   return strtolower($deflang);
}

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
 
if (!isset($_REQUEST['ip']) && !isset($_REQUEST['lang']) && !isset($_REQUEST['mode'])) {
	echo "Please see <a href='http://hellosalut-ftfish.rhcloud.com/hello/'>http://hellosalut-ftfish.rhcloud.com/hello/</a> for details on how to use this service.";
}
else{
	if (isset($_REQUEST['mode'])){
		switch ($_REQUEST['mode']){
			case "auto":
				getHelloFromLang(getDefaultLanguage());
			break; 
		}
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
	}
	header('Content-type: application/json'); 
	echo json_encode($hellosalut);	
}



?>