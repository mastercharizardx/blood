<?php

require 'vendor/autoload.php';
?>
<?php

   $host= "ec2-18-210-214-86.compute-1.amazonaws.com";
    $dbUsername = "xjiqxvbnompbzr";
    $dbPassword = "fc254a04a16cff74242a67d7198f88eba25aa5c56a9f2d7852f2c6a11dbd6910";
    $dbname= "dbqsco5mek7nvu";
    
   //create connection
   $conn = pg_connect (" $host $dbUsername $dbPassword $dbname");
if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}

?>
    
<?php
$name = $_POST['name'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$blood_group = $_POST['blood_group'];
$telephone = $_POST['telephone'];
$zone=$_POST['zone'];
$last_donated = $_POST['last_donated'];
?>
<!-- put ur sql query below-->
<?php
$sql = "INSERT INTO registration(name, age, weight, height, blood_group, telephone, zone, last_donated)
        VALUES('$name', '$age','$weight','$height','$blood_group','$telephone','$zone','$last_donated')";

        if(pg_query($conn,$sql))
        {
        	header("Location:mesg.php");//index.html is the next page after registeration.U can use the same page instead
        }
        else
        {
        	echo pg_last_error($conn);
        }
?>
