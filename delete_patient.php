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



// Get IDs
// $doctor_id = filter_input(INPUT_POST, 'Doctor_id', FILTER_VALIDATE_INT);

// Delete the patient from the database
// if ($doctor_id != false) {
//     $query = 'DELETE FROM doctor
//               WHERE Doctor_Id = :Doctor_id';
//     $statement = $db->prepare($query);
//     $statement->bindValue(':doctor_id', $doctor_id);
//     $success = $statement->execute();
//     $statement->closeCursor();    
// }

// Display the Patients List page
//include('index.php'); -->



// require_once('database.php');

// // Get patient ID
// $patient_id = filter_input(INPUT_POST, 'Patient_id', FILTER_VALIDATE_INT);

// // Delete the patient from the database
// if ($patient_id !== false) {
//     $query = 'DELETE FROM patient
//               WHERE Patient_Id = :Patient_id';
//     $statement = $db->prepare($query);
//     $statement->bindValue(':Patient_id', $patient_id);
//     $success = $statement->execute();
//     $statement->closeCursor();    
// }

// // Get doctor ID
// $doctor_id = filter_input(INPUT_POST, 'Doctor_id', FILTER_VALIDATE_INT);

// // Delete the doctor from the database
// if ($doctor_id !== false) {
//     $query = 'DELETE FROM doctor
//               WHERE Doctor_Id = :Doctor_id';
//     $statement = $db->prepare($query);
//     $statement->bindValue(':Doctor_id', $doctor_id);
//     $success = $statement->execute();
//     $statement->closeCursor();    
// }

// // Display the Patients List page
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

// Display the appropriate list page
// if ($record_type === 'patient') {
//     include('patient_list.php');

// } else if ($record_type === 'doctor') {
//     include('doctor_list.php');

// Redirect to the main page
header('Location: page-1.php');
exit();

?>
