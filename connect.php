<?php
$host="localhost";
$username="root";
$password="admin@20";
$database = "blog";

$conn = new mysqli($host,$username,$password,$database);

if($conn->connect_error){
    die("Error".$conn->connect_error);
}
 // echo "Connected";

 // $sql_table = "CREATE TABLE admins(id int auto_increment primary key ,names varchar(40),email varchar(70),passwords varchar(15))";

 $sql_insert = "INSERT INTO admins(names,email,passwords) values('Divya Sree Manasa','divya@gmail.com','apple')";
//   $sql_inserts = "INSERT INTO admins(names,email,passwords) values('Sucharitha','sucharitha@gmail.com','chagantipati')";
  if($conn->query($sql_insert)===TRUE){
    echo "inserted now";
}



