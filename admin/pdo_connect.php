<?php
try {
    $host = 'localhost';
    $dbName = 'ledauphine';
    $user = 'root';
    $password = '';
    $pdo = new PDO(
        'mysql:host='.$host.';dbname='.$dbName.';charset=utf8',
        $user,
        $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $e) {
    throw new InvalidArgumentException('Error conection with the data base : '.$e->getMessage());
    exit;
}

?>