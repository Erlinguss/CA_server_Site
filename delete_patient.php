 <?php
// require_once('database.php');

// Get IDs
// $patient_id = filter_input(INPUT_POST, 'Patient_id', FILTER_VALIDATE_INT);

// Delete the patient from the database
// if ($patient_id != false) {
//     $query = 'DELETE FROM patient
//               WHERE Patient_Id = :Patient_id';
//     $statement = $db->prepare($query);
//     $statement->bindValue(':Patient_id', $patient_id);
//     $success = $statement->execute();
//     $statement->closeCursor();    
// }

// Display the Patients List page
// include('index.php');


require_once('database.php');

// Get record ID and type
$record_id = filter_input(INPUT_POST, 'record_id', FILTER_VALIDATE_INT);
$record_type = filter_input(INPUT_POST, 'record_type');


// Delete the record from the appropriate table
if ($record_id !== false && $record_type === 'patient') {
    $query = 'DELETE FROM patient WHERE Patient_Id = :record_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':record_id', $record_id);
    $success = $statement->execute();
    $statement->closeCursor();    
    
} else if ($record_id !== false && $record_type === 'doctor') {
    $query = 'DELETE FROM doctor WHERE Doctor_Id = :record_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':record_id', $record_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

header('Location: page-1.php');
exit();

?>
