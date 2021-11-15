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

$a=$_GET["employee_id"];
$b=$_GET["phar_id"];
$c=$_GET["name"];
$d=$_GET["shift_start"];
$e=$_GET["shift_end"];
$sql = "INSERT INTO employee (employee_id,phar_id,name,shift_start,shift_end) VALUES ('$a','$b','$c','$d','$e')";
if(empty($a)||empty($b)||empty($c)||empty($d)||empty($e)){
	echo 'You can not leave a field empty';
	echo '<br><a href="insert">Please try again</a>';
}
else if (mysqli_query($conn, $sql)) {
	$last_id = mysqli_insert_id($conn);
    echo "New record created successfully";
	echo '<a href="/"><font color="red">Go To Homepage</a>';
} else {
    echo "Error: " . mysqli_error($conn);
	echo '<br><a href="insert">Please try again</a>';
}

mysqli_close($conn);
?><?php /**PATH C:\xampp\htdocs\LaraEcommerce\resources\views/insertemployee.blade.php ENDPATH**/ ?>