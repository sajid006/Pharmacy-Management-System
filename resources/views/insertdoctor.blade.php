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

$a=$_GET["phys_id"];
$b=$_GET["speciality"];
$c=$_GET["name"];
$d=$_GET["drug_id"];
$e=$_GET["date"];
$f=$_GET["uantity"];

$sql = "INSERT INTO doctor(phys_id,speciality,d_name,drug_id,purchase_date,quantity) VALUES ('$a','$b','$c','$d','$e','$f')";
if(empty($a)||empty($b)||empty($c)||empty($d)||empty($e)||empty($f)){
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