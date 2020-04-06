<?php
session_start();

function login($pdo, $login, $password)
{
    $errors = [];
    try {
        $req = $pdo->prepare(
            'SELECT * FROM user where (login = :login) and password = :password');
        $req->execute([
            'login' => $login,
            'password' => md5($password)
        ]);
    } catch (PDOException $exception) {
        var_dump($exception);
        die();
    }
    $res = $req->fetch();
    if ($res == false) {
        $errors[] = 'user unknown';
        session_destroy();
    } else {
        $_SESSION['user'] = $res;
    }
    return $errors;
}


function registerUser($pdo, $errors){
    try{
        $req = $pdo->prepare(
            'INSERT INTO user(login, name, surname)
    VALUES(:login, :name, :surname)');
        $req->execute([
            'login' => $_POST['login'],
            'name' => $_POST['name'],
            'surname' => $_POST['surname']

        ]);
    } catch (PDOException $exception){
        if($exception->getCode() === '23000'){
            $errors[] = 'login déjà utilisé';
        }
    }
    return $errors;
}

function validateFormUtilisateur(){
    $error = [];
    if(empty($_POST['login'])){
        $error[] = 'Put your login';
    }
    if(empty($_POST['name'])){
        $error[] = 'Put your name';
    }


    if(empty($_POST['surname'])){
        $error[] = 'Put your surname';
    }


    return $error;
}