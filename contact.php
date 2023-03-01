<?php include 'includes/header.php'; ?>

<main class="container">
  <div class="starter-template text-center">
    <h1>Contact us</h1>
    <p class="lead">Please use the form below to get in touch with us.</p>

    <form method="POST" name="contactform" action="contact-form-handler.php">
      <div >
        <label for="name" class="form-label">Your Name</label>
        <input type="text" name="name" class="form-control" placeholder="First name and Surname" required>
      </div>


      <div >
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" id="email"class="form-control"  placeholder="Email Address" required>
      </div>


      <div >
      <label for="password">Password:</label>
     <input type="password" id="password" name="password" placeholder="Password" required>
          </div> 


          <div >
          <label for="dob">Date of birth:</label>
          <input type="date" id="dob" name="dob" placeholder="Date of birth" required>
        </div>

        <div >
        <label for="gender"  >Gender:</label>
  <select id="gender" name="gender"    required  >
    <option value="">Select gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Other</option>
  </select>
        </div>
     
        <div >
        <label for="age">Age:</label>
  <input type="number" id="age" name="age" min="18" max="120" placeholder="Age" required>
        </div>


        <div >
  <label for="city">City:</label>
  <select id="city" name="city"  required>
    <option value="">Select a city</option>
    <option value="Dublin">Dublin</option>
    <option value="Cork">Cork</option>
    <option value="Galway">Galway</option>
    <option value="Limerick">Limerick</option>
    <option value="Waterford">Waterford</option>
    <option value="Kilkenny">Kilkenny</option>
  </select>
</div>

      <div >
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" name="phone" class="form-control" placeholder="12345678" required>
      </div>


  <div >
          <label for="newsletter">Subscribe to our newsletter:</label>
          <input type="checkbox" id="newsletter" name="newsletter" value="yes">
          </div>


      <div >
        <label for="message" class="form-label">Message</label>
        <textarea name="message" class="form-control" rows="5" required></textarea>
      </div>


      <div >
      <label for="terms">I agree to the terms and conditions:</label>
  <input type="checkbox" id="terms" name="terms" required>
  <a href="/terms" target="_blank">View terms and conditions</a>
    </div> 

     
    <button type="submit" class="btn btn-primary">Submit</button>
      <!-- <button type="reset" class="btn btn-primary">Reset</button> -->
   
    </form>
  </div>
</main>
<script src="validation.js"></script>

<?php include 'includes/footer.php'; ?>

