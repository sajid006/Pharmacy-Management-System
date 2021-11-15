<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laravel_ecommerce_tutorial";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo 'connected';

$a=$_GET["phar_id"];
$b=$_GET["name"];
$c=$_GET["fax"];
$d=$_GET["address"];

$sql = "INSERT INTO pharmacy (phar_id,name,fax,address) VALUES ('$a','$b','$c','$d')";
if(empty($a)||empty($b)||empty($c)||empty($d)){
	echo 'You can not leave a field empty';
	echo '<br><a href="insert">Please try again</a>';
}
else if (mysqli_query($conn, $sql)) {
	$last_id = mysqli_insert_id($conn);
    echo "New record created successfully";
	echo '<a href="welcome"><font color="red">Go To Homepage</a>';
} else {
    echo "Error: " . mysqli_error($conn);
	echo '<br><a href="insert">Please try again</a>';
}

mysqli_close($conn);
?>