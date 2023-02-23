
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

// Get patients
$queryPatients = 'SELECT * FROM patient';
$statement = $db->prepare($queryPatients);
$statement->execute();
$patients = $statement->fetchAll();
$statement->closeCursor();
//print_r($patients); // this is to get the data as an array!
?>



<?php include 'includes/header.php';?>

<main class="container">

<section>
        <!-- display a table of doctors -->
        <table>
            <tr>
               
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
                <td><form action="delete_patient.php" method="post">
                        <input type="hidden" name="record_type" value="doctor">
                        <input type="hidden" name="record_id" value="<?php echo $doctor['Doctor_Id']; ?>">
                        <input type="submit" value="Delete">
                    </form>
</form></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>








    
   <section>
        <!-- display a table of patients -->
        <table>
            <tr>
                
                <th>First_Name</th>
                <th>SurName</th>
                <th>Address</th>
                <th>Telephone</th>
                <th>Email</th>

                <th>Delete</th>
            </tr>

            <?php foreach ($patients as $patient) : ?>
            <tr>
                
                <td><?php echo $patient['First_Name_Patient']; ?></td>
                <td><?php echo $patient['Last_Name_Patient']; ?></td>
                 <td><?php echo $patient['Patient_Address']; ?></td>
                <td><?php echo $patient['Patient_Telephone']; ?></td>
                <td><?php echo $patient['Patient_Email']; ?></td>
                <td><form action="delete_patient.php" method="post">
    <input type="hidden" name="record_type" value="doctor">
    <input type="hidden" name="record_id" value="<?php echo $doctor['Doctor_Id']; ?>">
    <input type="submit" value="Delete">
</form></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>










    

</main><!-- /.container -->
<?php include 'includes/footer.php';?>
