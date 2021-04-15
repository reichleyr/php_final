<?php
  $host     =  'localhost';
  $user     =  'root';
  $password =  '';
  $database = 'russell_reichley';

  $link = mysqli_connect($host, $user, $password,$database  );
  /*if (!$link)
  {
  	echo "Connction failed<br />";
  }
  else
  {
  	echo "Connected<br />";
  }*/
  $query = "CREATE DATABASE IF NOT EXISTS russell_reichley;";
   // step 2: use mysqli_query()
   $result = mysqli_query($link, $query);
?>
