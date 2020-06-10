
 
<?php 
  $host= "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname= "blood";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}
$query="select * from registration";
$result=mysqli_query($conn,$query);
?>
 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 2px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

.container {
  border-radius: 5px;
  background-color: #ffefd5;
  padding: 20px;
  align:center;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
    
    <h2 align="center"><b>Doner's Details</b></h2>
	<div class="container" style="overflow-x:auto;">
	<table>
        <tr>
            <th> Name</th>
            <th> Age</th>
            <th> Weight </th>
            <th> Height </th>
			<th> Blood Group</th>
			<th> Contact Number</th>
			<th> Area</th>
			<th> Last Donated </th>
        </tr>
    <?php 
        while($rows=mysqli_fetch_assoc($result))
        {
    ?>        
            <tr>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['age']; ?></td>
                <td><?php echo $rows['weight']; ?></td>
                <td><?php echo $rows['height']; ?></td>
				<td><?php echo $rows['blood_group']; ?></td>
				<td><?php echo $rows['telephone']; ?></td>
				<td><?php echo $rows['zone']; ?></td>
				<td><?php echo $rows['last_donated']; ?></td>
            </tr>
    <?php     
        }
    ?>    
    </table>
	</div>
    
</body>
</html>