<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Starter Template · Bootstrap v5.0</title>
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css1/mystyle.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
  
  </head>
  <body>
             
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
      <div class="container">

      <img class="logo" src="images/logo2.jpg">

      <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-inline mb-3">
  <input type="text" name="search" class="form-control mr-sm-2" placeholder="Search by name"
   value="<?php echo isset($_GET['search']) ? $_GET['search'] : '' ?>" onkeyup="delayedSubmit(this)">
  <?php if (isset($_GET['sort'])) : ?>
    <input type="hidden" name="sort" value="<?php echo $_GET['sort']; ?>">
  <?php endif; ?>
</form>

<script>
  var timeout = null;
  function delayedSubmit(input) {
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      input.form.submit();
    }, 500); // submit the form after 500 milliseconds (0.5 seconds)
  }
</script>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>
          <span class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
            <a class="nav-link"  href="index.php">HOME</a>
            </li>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-1.php">TREATEMENTS</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="contact.php">BOOKING APPOINTMENT</a>
              </li>
            </ul>
          </span>
        </div>
      </div>
    </nav>