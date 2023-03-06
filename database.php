<?php
    //  $dsn = 'mysql:host=localhost;dbname=d00251914';
    // $username = 'root';
    // $password = '';

    // This code is for the DKIT server site
    $dsn = 'mysql:host=localhost;dbname=d00251914';
    $username = 'd00251914';
    $password = 'jQ46eve2';
    

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>