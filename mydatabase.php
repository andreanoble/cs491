
<?php

//
//
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "test";

//connect to DB
try {
	$db = new PDO("mysql:host=$host;dbname=$db_name","$user","");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
	echo "success connecting\n";
} catch (Exception $e) {
	echo "Could not connect to the database";
	exit;
}


//query
try{
	$results = $db->query("SELECT *  FROM adn2_db ORDER BY street ASC");
	echo "successful query\n";
} catch (Exception $e){
	echo "trouble";
	exit;
}

//shows select results
echo "<pre>";
$property = ($results->fetchAll(PDO::FETCH_ASSOC));

var_dump($property);
?>