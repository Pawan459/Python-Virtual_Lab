<?php
session_start();

$con=mysql_connect('localhost','root','');

mysql_select_db("datatypes",$con);

	
    @$designation = $_POST['designation'];
   
     @$yes = ($_POST['Yes']);
     
     @$r1 = ($_POST['rate']);
  
   @$comment = ($_POST['comment']);
   
    	$qy="INSERT INTO feedback(designation,Yes,rate,comment) VALUES('$designation','$yes','$r1','$comment') ";

echo "Your Data Inserted";
        mysql_query($qy);
   header("location:./index.php");

?>
