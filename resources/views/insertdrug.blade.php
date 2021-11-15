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

$a=$_GET["drug_id"];
$b=$_GET["cust_id"];
$c=$_GET["trade_name"];
$d=$_GET["price"];

$sql = "INSERT INTO drug (drug_id,customer_id,trade_name,price) VALUES ('$a','$b','$c','$d')";
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