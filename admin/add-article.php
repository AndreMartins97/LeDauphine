

<?php

require_once 'pdo_connect.php';
require_once 'functions/annonce-function.php';
$errors = [];
$imageUrl = null;

if ( $_SERVER['REQUEST_METHOD'] === 'POST'){
    $returnValidation = validateAnnounce();
    $errors = $returnValidation['errors'];

    if( count($errors) === 0) {
        addAnnonce($pdo, $returnValidation['image']);
        header('Location: list-article.php');
    }
}
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



<html>
<div style="text-align: center">
    <h1>Add Article</h1>


    <form method="post" action="add-article.php" enctype="multipart/form-data">
        <label>Article title</label>
        <input name="titre" class="form-control" placeholder="Titre de l'article">
        <br><br>

        <textarea name="contenu" class="from-control" required placeholder="Contenu de l'article" ></textarea><br>
        <br><br>
        <label>Image</label>
        <input type="file" name="image"><br><br>

        <input type="submit">
    </form>


    <?php
    if(count($errors) != 0){
        echo('<h2>Erreurs lors de la dernière soumission du formulaire: </h2>');
        foreach($errors as $error){
            echo('<div class="error alert alert-danger" role="alert">'.$error.'</div>');
        }
    }
    ?>



</div>

</html>