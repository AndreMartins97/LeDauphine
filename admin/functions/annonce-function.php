<?php

session_start();

    function validateAnnounce() {
        $errors = [];
        $imageUrl = [];
        if($_FILES['image']['size'] == 0){
            $errors[] = 'Add a image pls';
        }
        if($_FILES['image']['type'] === 'image/png'){
            if($_FILES['image']['size']<80000){
                $extension = explode('/', $_FILES['image']['type'])[1];
                $imageUrl = uniqid().'.'.$extension;
                move_uploaded_file($_FILES['image']['tmp_name'],'assets/images/'.$imageUrl);
            } else {
                $errors[] = 'File to big';
            }
        } else {
            $errors[] = 'Impossible : only PNGs';
        }

        if (empty($_POST['title'])) {
            $errors[] = 'Add title';
        }
        if ( empty($_POST['content'])) {
            $errors[] = 'Add Content';
        }

        return ['errors'=>$errors, 'image'=>$imageUrl];
    }



    function addAnnonce($pdo, $imageUrl){

        $req = $pdo->prepare(
            'INSERT INTO annonce(image_link, content, title, name_surname_user )
        VALUES(:image_link, :content, :title, :name_surname_user)');

        $req->execute([
            'image_link' => $imageUrl,
            'content' => $_POST['content'],
            'title' => $_POST['title'],
            'name_surname_user' => $_SESSION['user'],

        ]);

    }

?>












