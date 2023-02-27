
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
<section>
        <!-- display a table of doctors -->
      
        <table>
        <h1>Doctor Table </h1>
            <tr>
                <!-- <th>Doctor_ID</th> -->
            
                <th>First_Name</th>
                <th>SurName</th>
                <th>Address</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Delete</th>
            </tr>

            <?php foreach ($doctors as $doctor) : ?>
            <tr>
             
                <td><?php echo $doctor['First_Name_Doctor']; ?></td>
                <td><?php echo $doctor['Last_Name_Doctor']; ?></td>
                 <td><?php echo $doctor['Doctor_Address']; ?></td>
                <td><?php echo $doctor['Doctor_Telephone']; ?></td>
                <td><?php echo $doctor['Doctor_Email']; ?></td>
                <td><form action="contact.php" method="post">
                        <input type="hidden" name="record_type" value="doctor">
                        <input type="hidden" name="record_id" value="<?php echo $doctor['Doctor_Id']; ?>">
                        <input type="submit" value="Booking">
                    </form>
</td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>

    </div >
    <div class="container">
   <section>
        <!-- display a table of clinic -->
        <table>
            <h1>Clinic Table </h1>
            <tr>
                <!-- <th>Clinic_ID</th> -->
                <th>Clinic_Name</th>
                <th>Address</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Booking</th>
            </tr>

            <?php foreach ($clinics as $clinic) : ?>
            <tr>
                <td><?php echo $clinic['Clinic_Name']; ?></td>
                <td><?php echo $clinic['Clinic_Address']; ?></td>
                <td><?php echo $clinic['Clinic_Telephone']; ?></td>
                <td><?php echo $clinic['Clinic_Email']; ?></td>

                <td><form action="contact.php" method="post">
    <input type="hidden" name="record_type" value="clinic">
    <input type="hidden" name="record_id" value="<?php echo $clinic['Clinic_Id']; ?>">
    <input type="submit" value="Booking">
</form></td>

            </tr>
            <?php endforeach; ?>
        </table>
    </section>
    </div>
    

</main><!-- /.container -->
<?php include 'includes/footer.php';?>
