<?php 
session_start();

$connection  = mysqli_connect('localhost', 'root', '', 'data');
if(!$connection){
    die("FAILED");
}

?>