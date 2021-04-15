<?php
 include 'connection.php';


 ?>

 <?php

 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }




   $fname	 = test_input($_POST['fname']);
   $lname 	 = test_input($_POST['lname']);
   $address  = test_input($_POST['petname']);
   $state    = test_input($_POST['photoname']);

   $query = "INSERT INTO pets(firstName,lastName,petname,photoname)
             VALUES ('$fname','$lname','$petname','$photoname');";
   $result = mysqli_query($link, $query);
   if (!$result)
   {
   		echo "Failed to insert values <br />";
   }
   else
   {
       echo "Values inserted <br />";
   }
?>
