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


// TREATMENT_TYPESI DATA - self applied PHP features
// Default sorting by clinic name
if (isset($_GET['sort'])) {
  if ($_GET['sort'] == 'name_asc') {
    usort($treatmentTypes, function ($a, $b) {
      return strcmp($a['name'], $b['name']);
    });
  } else if ($_GET['sort'] == 'name_desc') {
    usort($treatmentTypes, function ($a, $b) {
      return strcmp($b['name'], $a['name']);
    });
  }
}

// Sorting function by price // self applied PHP features
if (isset($_GET['sort'])) {
  if ($_GET['sort'] == 'asc') {
    usort($treatmentTypes, function ($a, $b) {
      return $a['price'] - $b['price'];
    });
  } else if ($_GET['sort'] == 'desc') {
    usort($treatmentTypes, function ($a, $b) {
      return $b['price'] - $a['price'];
    });
  }
}


// CLINIC DATA- self applied PHP features
// Sorting function by telephone 
if (isset($_GET['sort'])) {
  if ($_GET['sort'] == 'phone_asc') {
    usort($treatmentTypes, function ($a, $b) {
      return $a['Clinic_Telephone'] - $b['Clinic_Telephone'];
    });
  } else if ($_GET['sort'] == 'phone_desc') {
    usort($treatmentTypes, function ($a, $b) {
      return $b['Clinic_Telephone'] - $a['Clinic_Telephone'];
    });
  }
}

// Sorting function by address // self applied PHP features
if (isset($_GET['sort'])) {
  if ($_GET['sort'] == 'address_asc') {
    usort($clinics, function ($a, $b) {
      return strcmp($a['Clinic_Address'], $b['Clinic_Address']);
    });
  } else if ($_GET['sort'] == 'address_desc') {
    usort($clinics, function ($a, $b) {
      return strcmp($b['Clinic_Address'], $a['Clinic_Address']);
    });
  }
}

// Get treatment types with search term
if (isset($_GET['search']) && !empty($_GET['search'])) {
  $search = $_GET['search'];
  $queryTreatmentType = "SELECT * FROM Treatment_TypeI WHERE name LIKE '%$search%'";
} else {
  $queryTreatmentType = 'SELECT * FROM Treatment_TypeI';
}
$statement = $db->prepare($queryTreatmentType);
$statement->execute();
$treatmentTypes = $statement->fetchAll();
$statement->closeCursor();



?>

<?php include 'includes/header.php'; ?>

<main>
  <div class="container">

  <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
    <label for="search">Search:</label>
    <input type="text" id="search" name="search" class="form-control" value="<?php if (isset($_GET['search'])) { echo $_GET['search']; } ?>" placeholder="Enter keyword(s)">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




    <h5>Dental Treatment</h5>
    <div class="row">
      <div class="col-md-12">

  <!--- self applied PHP features---->
  <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
    
  <label for="sort">Sort by name:</label>
    <select name="sort" id="sort" class="form-control" onchange="this.form.submit()">
      <option value="">Select an option</option>
      <option value="name_asc" <?php if (isset($_GET['sort']) && $_GET['sort'] === 'name_asc') { echo 'selected'; } ?>>A-Z</option>
      <option value="name_desc" <?php if (isset($_GET['sort']) && $_GET['sort'] === 'name_desc') { echo 'selected'; } ?>>Z-A</option>
    </select>
  </div>
</form>
 <!--------------------------------->

 <!--- self applied PHP features---->
  
<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
    <label for="sort">Sort by price:</label>
    <select name="sort" id="sort" class="form-control" onchange="this.form.submit()">
      <option value="">Select an option</option>
      <option value="asc" <?php if (isset($_GET['sort']) && $_GET['sort'] === 'asc') { echo 'selected'; } ?>>Low to High</option>
      <option value="desc" <?php if (isset($_GET['sort']) && $_GET['sort'] === 'desc') { echo 'selected'; } ?>>High to Low</option>
    </select>
  </div>
</form>
 <!--------------------------------->


      </div>
      <?php foreach ($treatmentTypes as $treatment) : ?>
        <div class="col-md-3 mb-3">
          <img class="form-image" src="images/<?php echo $treatment['image']; ?>" alt="<?php echo $treatment['name']; ?>" class="img-fluid">
          <h4><?php echo $treatment['name']; ?></h4>
          <p><strong>Price: </strong> €<?php echo $treatment['price']; ?></p>
          <p><strong>Duration: </strong><?php echo $treatment['duration']; ?> minutes</p>
          <p><strong>Materials: </strong><?php echo $treatment['materials']; ?></p>
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

  <!--- self applied PHP features---->
  <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">  
  <div class="form-group">
    <label for="sort">Sort by address:</label>
    <select name="sort" id="sort" class="form-control" onchange="this.form.submit()">
      <option value="">Select an option</option>
      <option value="address_asc" <?php if (isset($_GET['sort']) && $_GET['sort'] === 'address_asc') { echo 'selected'; } ?>>Low to High</option>
      <option value="address_desc" <?php if (isset($_GET['sort']) && $_GET['sort'] === 'address_desc') { echo 'selected'; } ?>>High to Low</option>
    </select>
  </div>
</form>
 <!--------------------------------->


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