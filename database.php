<?php
     // to work remotely at home 
     $dsn = 'mysql:host=localhost;dbname=d00251914';
    $username = 'root';
    $password = '';

    //
    //  // This code is for the DKIT server without FileZilla
    //  $dsn = 'mysql:host=localhost;dbname=d00251914';
    //  $username = 'd00251914';
    //  $password = 'jQ46eve2';


    //  // // This code is for the DKIT server site FileZilla
    // $dsn = 'mysql:host=localhost;dbname=D00251914';
    // $username = 'D00251914';
    // $password = 'jQ46eve2';
    

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>