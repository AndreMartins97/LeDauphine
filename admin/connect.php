<?php
session_start();
if(!empty($_POST['password'] && !empty($_POST['user']))){
    $_SESSION['user'] = $_POST['user'];
    header('Location: welcome-admin.php');
} else {
    header('Location: login.php');
}