<?php include 'includes/header.php';?>

<main class="container">
  <div class="starter-template text-center">
    <h1>Contact us</h1>
    <p class="lead">THE CONTACT FORM WILL BE HERE


    <form method="POST" name="contactform" action="contact-form-handler.php"> 
<p>
<label for='name'>Your Name:</label> <br>
<input type="text" name="name">
</p>
<p>
<label for='email'>Email Address:</label> <br>
<input type="text" name="email"> <br>
</p>

<p>
<label for="phone">Enter a phone number:</label><br><br>
  <input type="tel" name="phone" 
  placeholder="123-45-678" 
  required><br><br>
</p>

<p>
<label for='message'>Message:</label> <br>
<textarea name="message"></textarea>
</p>
<input type="submit" value="Submit"><br>
</form>
<br> All you get is this text and a mostly barebones HTML document.</p>
  </div>

</main><!-- /.container -->
<?php include 'includes/footer.php'; ?>


