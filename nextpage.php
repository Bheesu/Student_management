<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:stu_first.php');
}



if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>