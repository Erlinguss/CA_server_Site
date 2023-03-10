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
  <body >
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img class="logo" src="images/logo2.jpg">
        </a>
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link"  href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="page-1.php">TREATEMENTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="contact.php">BOOKING APPOINTMENT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>