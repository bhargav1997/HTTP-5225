<?php 

$connect = mysqli_connect('localhost', 'root', 'root', 'yogastudio');
if(!$connect){
  die("Connection Failed: " . mysqli_connect_error());
}

?>