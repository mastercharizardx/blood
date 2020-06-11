<?php

require 'vendor/autoload.php';
?>
<?php

 $host= "ec2-18-210-214-86.compute-1.amazonaws.com";
 $dbUsername = "xjiqxvbnompbzr";
 $dbPassword = "fc254a04a16cff74242a67d7198f88eba25aa5c56a9f2d7852f2c6a11dbd6910";
 $dbname= "dbqsco5mek7nvu";
     
	 //create connection
  
 $conn = pg_connect($host, $dbUsername, $dbPassword, $dbname);

if(!$conn)

{
	
die('Connection failed!'.mysqli_error($conn));

}
   
   $sql =<<<EOF
      CREATE TABLE registration
      (name TEXT NOT NULL,
        age     INT    NOT NULL,
      height         FLOAT    NOT NULL,
      weight FLOAT NOT NULL,
      blood_group char(10) NOT NULL,  
	  telephone BIGINT NOT NULL,
	  zone char(50) NOT NULL,
	  last_donated DATE );
EOF;

   $ret = pg_query($conn, $sql);
   if(!$ret) {
      echo pg_last_error($conn);
   } else {
      echo "Table created successfully\n";
   }
   pg_close($conn);
?>
