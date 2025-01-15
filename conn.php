<?php
$host = 'localhost';
$username='root';
$password = '';
$db = 'lydiadb';
$conn = mysqli_connect('localhost', 'root', '','lydiadb' );
if(!$conn){
  die("connection failed");
}else{
//  echo "connection successful";
}
?>