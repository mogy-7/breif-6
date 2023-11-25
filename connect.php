<?php

$conn = new mysqli("localhost", "root","", "Crud");

// if($conn->connect_error){
//     die("connection failed : " . $conn->connect_error);
// } 

$CrudTable = "CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    email VARCHAR(100),
    mobile VARCHAR(100),
    password VARCHAR(100)
);
    ";

// if ($conn->query($CrudTable) === TRUE ){
//     echo "table created";
// }else {
//     echo "error creating table: " . $conn->error;
// }