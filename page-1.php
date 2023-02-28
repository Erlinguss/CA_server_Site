
<?php
require_once('database.php');

// Get doctors
$queryDoctor = 'SELECT * FROM doctor';
$statement = $db->prepare($queryDoctor);
$statement->execute();
$doctors = $statement->fetchAll();
$statement->closeCursor();
//print_r($doctors); // this is to get the data as an array!
?>

<?php
require_once('database.php');

// Get clinics
$queryClinic = 'SELECT * FROM clinic';
$statement = $db->prepare($queryClinic);
$statement->execute();
$clinics = $statement->fetchAll();
$statement->closeCursor();
//print_r($clinics); // this is to get the data as an array!
?>


<?php include 'includes/header.php';?>

<main >

<div class="container" >
        <h1>Doctor Data </h1>
        
            <?php foreach ($doctors as $doctor) : ?>
                <?php echo $doctor['First_Name_Doctor']; ?>
                <?php echo $doctor['Last_Name_Doctor']; ?>
                 <?php echo $doctor['Doctor_Address']; ?>
                <?php echo $doctor['Doctor_Telephone']; ?>
                <?php echo $doctor['Doctor_Email']; ?>
          
                <form action="contact.php"   method="post">
                        <!-- <input type="hidden" name="record_type" value="doctor"> -->
                        <!-- <input type="hidden" name="record_id" value="<?php echo $doctor['Doctor_Id']; ?>"> -->
                        <input type="submit" value="Booking">
                    </form>
          

            <?php endforeach; ?>
    </div >

    <div class="container">

            <h1>Clinic Data </h1>
        
            <?php foreach ($clinics as $clinic) : ?>
                <?php echo $clinic['Clinic_Name']; ?>
                <?php echo $clinic['Clinic_Address']; ?>
                <?php echo $clinic['Clinic_Telephone']; ?>
                <?php echo $clinic['Clinic_Email']; ?>

                <form action="contact.php" method="post">
    <!-- <input type="hidden" name="record_type" value="clinic"> -->
    <!-- <input type="hidden" name="record_id" value="<?php echo $clinic['Clinic_Id']; ?>"> -->
    <input type="submit" value="Booking">
</form>
            <?php endforeach; ?>
          
   
    </div>

</main>
<?php include 'includes/footer.php';?>
