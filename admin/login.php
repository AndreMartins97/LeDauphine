<?php
session_start();

require_once 'functions/user-function.php';
require_once 'pdo_connect.php';

if ( $_SERVER['REQUEST_METHOD'] === 'POST'){

    $errors = login($pdo, $_POST['login'], $_POST['password']);

    if(count($errors) == 0){
        header('Location: homepage.php');
    }
}
?>




<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<form method="post" action="connect.php">
    <input type="text" placeholder="Log in ou Email">
    <input type="password" placeholder="Password" >
    <input type="submit">
</form>

<?php
if(isset($errors)){
    if(count($errors)>0){
        echo('<h2>Errors : </h2>');
        foreach ($errors as $error){
            echo('<li>'.$error.'</li>');
        }
    }
}

?>


</body>
</html>

