<?php
require_once 'pdo_connect.php';
?>

<html>
<head>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
</head>
<body>

<?php
include 'nav-admin.php';
?>

<h1>Morning <?php echo($_SESSION['user'])?></h1>

