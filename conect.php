<?php

$con = new mysqli('localhost', 'root', '', 'RAMOS_PAYROLL' );

if(!$con){
    die(mysqli_error($con));
}
?>