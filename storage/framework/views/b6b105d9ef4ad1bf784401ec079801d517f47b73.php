<!DOCTYPE html>
<html>
<head>
	
	<title>welcome to pharmacy management system
	</title>
	



</head>
<body>
	<div class="container">
  <a href="welcome">Go To Homepage</a>
	<h2>Tables</h2>
	</div>
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
$sql="select column_name from INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='pharmacy'";
echo "<br>PHARMACY<br><br>";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s ",$row[0]);
        }
    mysqli_free_result($result);
}
$sql="SELECT * FROM `pharmacy`";
echo "<br>";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%-20s %-20s %-20s\n",$row[0],$row[1],$row[2]);
    echo "<br>";
    }
  // Free result set
  mysqli_free_result($result);
}
$sql="select column_name from INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='employee'";
echo "<br>EMPLOYEE<br><br>";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s ",$row[0]);
        }
    mysqli_free_result($result);
}
    $sql="SELECT * FROM `employee`";
    echo "<br>";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%-20s %-20s %-20s %-20s %-20s\n",$row[0],$row[1],$row[2],$row[3],$row[4]);
    echo "<br>";
    }
  // Free result set
  mysqli_free_result($result);
}
echo "phar_id employee_id employee_name";
 $sql="SELECT employee.employee_id, pharmacy.phar_id,employee.name
FROM employee
INNER JOIN pharmacy ON employee.employee_id = pharmacy.phar_id";
 echo "<br><br>INNER JOIN BETWEEN PHARMACY & EMPLOYEE<br><br>";
   echo "<br>";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%-20s %-20s %-20s\n",$row[0],$row[1],$row[2]);
    echo "<br>";
    }
  // Free result set
  mysqli_free_result($result);
}
echo "<br><br>DRUG MANUMFACTURER<br><br>";
$sql="select column_name from INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='drug_manu'";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s ",$row[0]);
        }
    mysqli_free_result($result);
}
echo "<br>";
 $sql="SELECT * FROM `drug_manu`";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%-20s %-20s %-20s %-20s %-20s\n",$row[0],$row[1],$row[2],$row[3],$row[4]);
    echo "<br>";
    }
  // Free result set
  mysqli_free_result($result);
}
echo "<br><br>DRUG MANUMFACTURER IN KHULNA<br><br>";
$sql="CREATE OR REPLACE FUNCTION `hello`(s char(30)) RETURNS INT(6) RETURN (SELECT customer_id FROM drug_manu WHERE address =s) ";
$sql1="SELECT `hello`('khulna') AS `hello`";
if(mysqli_query($conn,$sql))
{
  if($result=mysqli_query($conn,$sql1))
  {
    while($row=mysqli_fetch_row($result))
    {
      $sql2="SELECT * FROM `drug_manu` where customer_id=$row[0]";
      echo "customer_id address name start_date end_date<br>";
      if ($result1=mysqli_query($conn,$sql2))
      {
        // Fetch one and one row
        while ($row1=mysqli_fetch_row($result1))
        {
          printf ("%-20s %-20s %-20s %-20s %-20s\n",$row1[0],$row1[1],$row1[2],$row1[3],$row1[4]);
          echo "<br>";
        }
        // Free result set
        mysqli_free_result($result1);
      }
    }
    
  }
  
}

echo "<br><br>DRUG<br><br>";
$sql="select column_name from INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='drug'";
mysqli_free_result($result);
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s ",$row[0]);
    
        }
    mysqli_free_result($result);
}
echo "<br>";

 $sql="SELECT * FROM `drug`";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%-20s %-20s %-20s %-20s\n",$row[0],$row[1],$row[2],$row[3]);
    echo "<br>";
    }
  // Free result set
  mysqli_free_result($result);
}
echo "<br><br>DRUG WITH MAXIMUM PRICE<br>";
$sql="select column_name from INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='drug'";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s ",$row[0]);
    
        }
    mysqli_free_result($result);
}
echo "<br>";
$sql="SELECT * FROM drug WHERE price=(Select MAX(price) from drug)";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%-20s %-20s %-20s %-20s\n",$row[0],$row[1],$row[2],$row[3]);
    echo "<br>";
    }
  // Free result set
  mysqli_free_result($result);
}
$sql="select avg(price) from drug";
echo "<br>";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("Average price of the drugs is %-20s\n",$row[0]);
    echo "<br>";
    }
  // Free result set
  mysqli_free_result($result);
}
echo "<br><br>DOCTOR<br><br>";
$sql="select column_name from INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='doctor'";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s ",$row[0]);
        }
    mysqli_free_result($result);
}
echo "<br>";

 $sql="SELECT * FROM `doctor`";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%-20s %-20s %-20s %-20s ",$row[0],$row[1],$row[2],$row[3]);
    echo " ".$row[4]." ";
    printf("%s\n",$row[5]);
    echo "<br>";
    }
  // Free result set
  mysqli_free_result($result);
}
echo "<br><br>PATIENT<br><br>";
$sql="select column_name from INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='patient'";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s ",$row[0]);
        }
    mysqli_free_result($result);
}
echo "<br>";

 $sql="SELECT * FROM `patient`";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%-20s %-20s %-20s %-20s %-20s %-20s\n",$row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
    echo "<br>";
    }
  // Free result set
  mysqli_free_result($result);
}


 $sql="SELECT patient.p_id, doctor.phys_id,patient.name,doctor.d_name FROM patient LEFT JOIN doctor ON patient.phys_id = doctor.phys_id ORDER BY patient.name";
 echo "<br><br>LEFT JOIN BETWEEN DOCTOR & PATIENT<br><br>";
 echo "patient_id doctor_id patient_name doctor_name";
   echo "<br>";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%-20s %-20s %-20s %-20s\n",$row[0],$row[1],$row[2],$row[3]);
    echo "<br>";
    }
  // Free result set
  mysqli_free_result($result);
}
$sql="SELECT name FROM patient
UNION
SELECT name FROM employee
ORDER BY name";
 echo "<br><br>UNION BETWEEN EMPLOYEE & PATIENT<br><br>";
 echo "Name";
   echo "<br>";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%-20s\n",$row[0]);
    echo "<br>";
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($conn);
?>

</body>
</html><?php /**PATH C:\xampp\htdocs\LaraEcommerce\resources\views/showtables.blade.php ENDPATH**/ ?>