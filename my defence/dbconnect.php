<?php
//variable creation//
$server ="localhost";
$user ="root";
$password ="";
$dbname ="defence";

//establishing connection//
$connect = new mysqli($server,$user,$password,$dbname);

//checking connection//
 if ($connect->connect_error) {
  die("Connection failed:" .$connect->connect_error);
 }
 else {
    //echo "Database connected successfully";
 }
 
?>