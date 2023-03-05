

<?php
require_once('database.php');

// Get clinics
$queryClinic = 'SELECT * FROM Clinic';
$statement = $db->prepare($queryClinic);
$statement->execute();
$clinics = $statement->fetchAll();
$statement->closeCursor();
//print_r($clinics); // this is to get the data as an array!
?>

<?php
require_once('database.php');

// Get treatment_types
$queryTreatment_type = 'SELECT * FROM treatment_typeI';
$statement = $db->prepare($queryTreatment_type);
$statement->execute();
$treatment_type = $statement->fetchAll();
$statement->closeCursor();
//print_r($treatment_type); // this is to get the data as an array!
?>


<?php include 'includes/header.php';?>

<main >

<div class="container">
        <h1>Treatment Data</h1>
        <?php foreach ($treatment_type as $treatment) : ?>
            <div class="treatment">
                <img src="images/<?php echo $treatment['image']; ?>" alt="<?php echo $treatment['name']; ?>">
                <h2><?php echo $treatment['name']; ?></h2>
                <p><strong>Price:</strong> <?php echo $treatment['price']; ?></p>
                <p><strong>Duration:</strong> <?php echo $treatment['duration']; ?> minutes</p>
                <p><strong>Materials:</strong> <?php echo $treatment['materials']; ?></p>
                <form action="contact.php" method="post">
                    <input type="hidden" name="record_type" value="treatment_type">
                    <input type="hidden" name="record_id" value="<?php echo $treatment['id']; ?>">
                    <input type="submit" value="Book Now">
                </form>
            </div>
        <?php endforeach; ?>
    </div>




    <div class="container">

            <h1>Clinic Data </h1>
        
            <?php foreach ($clinics as $clinic) : ?>
                <?php echo $clinic['Clinic_Name']; ?>
                <?php echo $clinic['Clinic_Address']; ?>
                <?php echo $clinic['Clinic_Telephone']; ?>
                <?php echo $clinic['Clinic_Email']; ?>

                <form action="contact.php" method="post">
    <input type="hidden" name="record_type" value="clinic"> 
     <input type="hidden" name="record_id" value="<?php echo $clinic['Clinic_Id']; ?>">
    <input type="submit" value="Booking">
</form>
            <?php endforeach; ?>
          
   
    </div>

</main>
<?php include 'includes/footer.php';?>
