<?php

include 'connect.php';

if(isset($_GET['deletid'])){
    $item = $_GET['deletname'];
    $id = $_GET['deletid'];
    $sql = "DELETE FROM `$item` WHERE id=$id";

    $result= mysqli_query($con, $sql);
    if($result){
        header('location:displaybanc.php');
    }else {
        echo " does not deleted secssusfully ";
    }

    
}