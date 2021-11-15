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
$c=$_GET["data"];


$sql = "CREATE OR REPLACE DEFINER=`root`@`localhost` PROCEDURE `simpleproc`()
BEGIN
          DELETE from patient where p_id=1;            
                      END";
$sql1="CALL `simpleproc`()";
if(empty($a)||empty($b)||empty($c)){
	echo 'You can not leave a field empty';
	echo '<br><a href="modifydata">Please try again</a>';
}
else if (mysqli_query($conn, $sql)) {
	if(mysqli_query($conn,$sql1))
	{
		echo "Data deleted successfully";
		echo '<a href="welcome"><font color="red">Go To Homepage</a>';
	}
	else
	{
		 echo "Error: " . mysqli_error($conn);
		 echo '<br><a href="modifydata">Please try again</a>';
	}
    
} else {
    echo "Error: " . mysqli_error($conn);
	echo '<br><a href="modifydata">Please tryf again</a>';
}

mysqli_close($conn);
?>