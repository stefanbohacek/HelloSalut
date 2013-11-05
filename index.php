<?php
  if (!isset($_REQUEST['ip'])) {
    echo "Please see <a href='http://hellosalut-ftfish.rhcloud.com/hello/'>http://hellosalut-ftfish.rhcloud.com/hello/</a> for details on how to use this service.";
  }
  else{
    $ip = $_REQUEST['ip'];
    $ip = sprintf("%u\n", ip2long($ip));
    //Example site is hosted on Openshift, so you will need to update the connection info below to point to your database
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

    $hellosalut = array(
      "code" => $code,
      "country" => $country,
      "hello" => $hello
    );

    echo json_encode($hellosalut);
  }
?>