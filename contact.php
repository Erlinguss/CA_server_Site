<?php include 'includes/header.php'; ?>

<main class="container">
  <div class="starter-template text-center">
    <h1>Contact us</h1>
    <p class="lead">Please use the form below to get in touch with us.</p>

    <form method="POST" name="contactform" action="contact-form-handler.php">
      <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" id="email"class="form-control" required>
      </div>

      <div class="mb-3">
      <label for="password">Password:</label>
     <input type="password" id="password" name="password" required>
          </div>


          <div class="mb-3">
          <label for="dob">Date of birth:</label>
  <input type="date" id="dob" name="dob" required>
        </div>

        <div class="mb-3">
        <label for="gender">Gender:</label>
  <select id="gender" name="gender">
    <option value="">Select gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Other</option>
  </select>

        </div>
     
        <div class="mb-3">
        <label for="age">Age:</label>
  <input type="number" id="age" name="age" min="18" max="120">
          </div>

          <label for="website">Website:</label>
  <input type="url" id="website" name="website" placeholder="https://www.example.com">

          <div class="mb-3">
          <label for="color">Favorite color:</label>
  <input type="color" id="color" name="color">
          </div>

          <div class="mb-3">
          <label for="attachment">Attachment:</label>
  <input type="file" id="attachment" name="attachment">
          </div>


      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" name="phone" class="form-control" placeholder="123-45-678" required>
      </div>

      
  <div class="mb-3">
          <label for="newsletter">Subscribe to our newsletter:</label>
          <input type="checkbox" id="newsletter" name="newsletter" value="yes">
                </div>

      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea name="message" class="form-control" rows="5" required></textarea>
      </div>


      <div class="mb-3">
      <label for="terms">I agree to the terms and conditions:</label>
  <input type="checkbox" id="terms" name="terms" required>
  <a href="/terms" target="_blank">View terms and conditions</a>

    </div>


      
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-primary">Reset</button>
   
    </form>
  </div>
</main>

<?php include 'includes/footer.php'; ?>