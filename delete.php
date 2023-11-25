<?php

include 'connect.php';

if(isset($_GET['deletid'])){
    $id = $_GET['deletid'];
    $sql = "DELETE FROM `users` WHERE id=$id";

    $result= mysqli_query($conn, $sql);
    if($result){
        header('location:display.php');
    }else {
        echo " does not deleted secssusfully ";
    }

    
}