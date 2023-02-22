<?php
require_once('database.php');

// Get IDs
$patient_id = filter_input(INPUT_POST, 'Patiend_id', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($patient_id != false) {
    $query = 'DELETE FROM patient
              WHERE Patient_Id = :Patient_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':Patient_id', $patient_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('index.php');