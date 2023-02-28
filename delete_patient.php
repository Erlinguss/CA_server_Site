 <?php
//this code is ready to work with database and delete the record from the database with REFERENTIAL INTEGRITY.
require_once('database.php');

// Get record ID and type
$record_id = filter_input(INPUT_POST, 'record_id', FILTER_VALIDATE_INT);
$record_type = filter_input(INPUT_POST, 'record_type');


// Delete the record from the appropriate table
if ($record_id !== false && $record_type === 'Clinic') {
    $query = 'DELETE FROM Clinic WHERE Clinic_Id = :record_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':record_id', $record_id);
    $success = $statement->execute();
    $statement->closeCursor();    
    
} else if ($record_id !== false && $record_type === 'Doctor') {
    $query = 'DELETE FROM Doctor WHERE Doctor_Id = :record_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':record_id', $record_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

header('Location: page-1.php');
exit();

?>
