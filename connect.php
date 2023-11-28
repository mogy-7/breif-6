<?php

$con = new mysqli("localhost", "root","", "gestion_bancaire");



$role = "
INSERT INTO `role`(name)
 VALUES ('admin'),
        ('client');
";


// $con->query($role);

if (!$con) {
    echo " does not connectiong  seccusfully !";
}