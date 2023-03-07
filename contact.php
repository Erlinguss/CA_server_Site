<?php include 'includes/header.php'; ?>

<main class="container1">
  <div class="starter-template text-center">
    <h1>Contact us</h1>
    <p class="lead">Please use the form below to get in touch with us.</p>

    <form class="starter-template text-center" method="POST" name="contactform" action="contact-form-handler.php">
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
  <select id="gender" name="gender"    required>
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
    <option value="Drogheda">Drogheda</option>
     <option value="Sligo">Sligo</option>
     <option value="Castlebar">Castlebar</option>
      <option value="Shannon">Shannon</option>
      <option value="New Ross">New Ross</option>  
      <option value="Wicklow">Wicklow</option>  
      <option value="Arklow">Arklow</option>
      <option value="Wexford">Wexford</option>

    

  </select>
</div>

<div >
        <label for="zipcode" class="form-label">Zip code</label>
        <input type="zip" name="zipcode" class="form-control" placeholder="A91 N5D7" required>
      </div>

      <div >
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" name="phone" class="form-control" placeholder="12345678" required>
      </div>


  <div >
          <label for="newsletter">Subscribe to our newsletter:</label>
          <input type="checkbox" id="newsletter" name="newsletter" value="yes" required>
          </div>


      <div >
        <label for="message" class="form-label">Message</label>
        <textarea name="message" class="form-control" rows="5" required></textarea>
      </div>


   
    <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>
  </div>
</main>
<script src="validation.js"></script>

<?php include 'includes/footer.php'; ?>

