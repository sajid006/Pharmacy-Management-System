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

$a=$_GET["table"];
$b=$_GET["columnp"];
$c=$_GET["datap"];
$d=$_GET["columne"];
$e=$_GET["datae"];

$sql = "update $a set $d='$e' where $b='$c'";
if(empty($a)||empty($b)||empty($c)||empty($d)||empty($e)){
	echo 'You can not leave a field empty';
	echo '<br><a href="modifydata">Please try again</a>';
}
else if (mysqli_query($conn, $sql)) {
	$last_id = mysqli_insert_id($conn);
    echo "Data updated successfully";
	echo '<a href="welcome"><font color="red">Go To Homepage</a>';
} else {
    echo "Error: " . mysqli_error($conn);
	echo '<br><a href="modifydata">Please try again</a>';
}

mysqli_close($conn);
?>