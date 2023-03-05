<?php
require_once('database.php');

// Get clinics
$queryClinic = 'SELECT * FROM Clinic';
$statement = $db->prepare($queryClinic);
$statement->execute();
$clinics = $statement->fetchAll();
$statement->closeCursor();

// Get treatment types
$queryTreatmentType = 'SELECT * FROM Treatment_TypeI';
$statement = $db->prepare($queryTreatmentType);
$statement->execute();
$treatmentTypes = $statement->fetchAll();
$statement->closeCursor();
?>

<?php include 'includes/header.php'; ?>

<main>
  <div class="container">
    <h5>Treatment offered</h5>
    <div class="row">
      <?php foreach ($treatmentTypes as $treatment) : ?>
        <div class="col-md-3 mb-3">
          <img  class="form-image" src="images/<?php echo $treatment['image']; ?>" alt="<?php echo $treatment['name']; ?>" class="img-fluid">
          <h4><?php echo $treatment['name']; ?></h4>
          <p><strong>Price: </strong> €<?php echo $treatment['price']; ?></p>
          <p><strong>Duration:  </strong><?php echo $treatment['duration']; ?> minutes</p>
          <p><strong>Materials:  </strong><?php echo $treatment['materials']; ?></p>
          <form action="contact.php" method="post">
            <input type="hidden" name="record_type" value="treatment_type">
            <input type="hidden" name="record_id" value="<?php echo $treatment['id']; ?>">
            <input type="submit" value="Book now" class="btn btn-primary">
          </form>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="container">
    <h5>Visit any of our Clinic around the country </h5>
    <div class="row">
      <?php foreach ($clinics as $clinic) : ?>
        <div class="col-md-3 mb-3">
          <h4><?php echo $clinic['Clinic_Name']; ?></h4>
          <p><strong>Address:</strong> <?php echo $clinic['Clinic_Address']; ?></p>
          <p><strong>Telephone:</strong> <?php echo $clinic['Clinic_Telephone']; ?></p>
          <p><strong>Email:</strong> <?php echo $clinic['Clinic_Email']; ?></p>
          <form action="contact.php" method="post">
            <input type="hidden" name="record_type" value="clinic">
            <input type="hidden" name="record_id" value="<?php echo $clinic['Clinic_Id']; ?>">
            <input type="submit" value="Book now" class="btn btn-primary">
          </form>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>