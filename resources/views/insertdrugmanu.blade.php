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

$a=$_GET["customer_id"];
$b=$_GET["address"];
$c=$_GET["name"];
$d=$_GET["start_date"];
$e=$_GET["end_date"];
$sql = "INSERT INTO drug_manu (customer_id,address,name,start_date,end_date) VALUES ('$a','$b','$c','$d','$e')";
if(empty($a)||empty($b)||empty($c)||empty($d)||empty($e)){
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