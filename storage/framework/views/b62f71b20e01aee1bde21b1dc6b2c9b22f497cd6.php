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
$b=$_GET["column"];
$c=$_GET["type"];


$sql = "alter table $a modify $b $c";
if(empty($a)||empty($b)||empty($c)){
	echo 'You can not leave a field empty';
	echo '<br><a href="modifytable">Please try again</a>';
}
else if (mysqli_query($conn, $sql)) {
	$last_id = mysqli_insert_id($conn);
    echo "Column modified successfully";
	echo '<a href="welcome"><font color="red">Go To Homepage</a>';
} else {
    echo "Error: " . mysqli_error($conn);
	echo '<br><a href="modifytable">Please try again</a>';
}

mysqli_close($conn);
?><?php /**PATH C:\xampp\htdocs\LaraEcommerce\resources\views/columnmodify.blade.php ENDPATH**/ ?>