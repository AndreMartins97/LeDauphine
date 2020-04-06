


<?php

require_once 'functions/user-function.php';
require_once 'pdo_connect.php';

$errors = [];

if ( $_SERVER['REQUEST_METHOD'] === 'POST'){
    // je ferais le traitement de mon formulaire d'inscription

    $errors = validateFormUtilisateur();

    if(count($errors) ==  0){
        $errors = registerUser($pdo, $errors);
        if(count($errors) == 0){
            header('Location: login.php');
        }
    }

}
?>


<h2> Create new user</h2>

<form method="post" action="register.php">
    <div class="form-group">
        <label for="name">Put your login</label>
        <input type="text" class="form-control" name="login" id="login" placeholder="Login">
    </div>
    <div class="form-group">
        <label for="name">Put your name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
    </div>
    <div class="form-group">
        <label for="name">Put your surname</label>
        <input type="text" class="form-control" name="surname" id="surname" placeholder="Ypur surname">
    </div>


    <input type="submit">
</form>


<ul>
    <?php

    if(count($errors)>0){
        echo('<h2>Errors: </h2>');
        foreach ($errors as $error){
            echo ('<li>'.$error.'</li>');
        }
    }

    ?>
</ul>

<a href="login.php">You already have an account ? </a>


