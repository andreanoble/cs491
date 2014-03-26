<html>
<head>
	<title><?php echo "Abandonded Properties"; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
<?php

//
//
$host = "sql.njit.edu";
$user = "ser5";
$pass = "rTlzzhFwz";
$db_name = "ser5";

$sql=mysql_connect( $host, $user, $pass);

mysqli_select_db($sql, "ser5");

//Connection
try {
	$db = new PDO("mysql:host= $host;dbname= $db_name", $user, $pass);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
	echo "Could not connect to the database";
	exit;
}









$check=mysqli_query($sql, "SELECT * FROM USERS WHERE USERNAME='".$data["username"]."'");
$record=mysqli_fetch_array($check);
if ($check && $data["password"] != "" && $data["password"]===$record['PASSWORD'])
{
	// Set session variables here
}
else
{
	// Login error
}

//creating property	
$sql=mysqli_connect("sql.njit.edu","ser5","rTlzzhFwz","ser5");
mysqli_select_db($sql, "ser5");
$check=mysqli_query($sql, "INSERT INTO `PROPERTY` (`PROPID`, `OWNERID`, `DPURCH`, `BLOCK`, `LOT`, 
	`WARD`, `STREET`, `CITY`, `ZIP`, `STATE`, `PDESC`, `BOARDED`, `SPOST`, `INSPECTID`, `IDATE`, 
	`INOTES`, `LUSERID`, `LDATE`, `LCOMMENT`, `PAMSPIN`, `VDATE`, `AGENTID`)
	//VALUES( NULL, '".$data["username"]."','".$data["password"]."','".$data["displayn"]."','".$data["ulevel"]."')");
if ($check)
{
	//Insert successful
}
else
{
	//Insert failed, display error message
}

 


?>