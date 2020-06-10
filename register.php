<?php

   $host= "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname= "blood";
    
   //create connection
   $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
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

        if(mysqli_query($conn,$sql))
        {
        	header("Location:mesg.php");//index.html is the next page after registeration.U can use the same page instead
        }
        else
        {
        	echo mysqli_error($conn);
        }
?>