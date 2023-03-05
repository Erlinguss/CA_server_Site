<!-- 
// require_once('database.php');

// Get patients
// $queryPatients = 'SELECT * FROM patient';
// $statement = $db->prepare($queryPatients);
// $statement->execute();
// $patients = $statement->fetchAll();
// $statement->closeCursor();
//print_r($patients); // this is to get the data as an array!
//-->

<?php include 'includes/header.php'; ?> 


<main>
<div class="slideshow-container">
              <div class="mySlides">
                <img src="images/dental4.jpg"  width="1550" heigth="550">
             </div>

            <div class="mySlides">
               <img src="images/dental1.jpeg" width="1550" heigth="550" >
            </div>

            <div class="mySlides">
                <img src="images/dental2.jpg" width="1550" heigth="550" >
            </div>

            <div class="mySlides">
                <img src="images/dental3.jpeg" width="1550" heigth="550"  >
            </div>

            <div class="mySlides">
                <img src="images/dental7.jpeg" width="1550" heigth="550"  >
            </div>

            <div class="mySlides">
                <img src="images/dental8.jpeg" width="1550" heigth="550"  >
            </div>
          
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
             <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span> 
            <!-- <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span> --> 
        </div>

</main>

<?php include 'includes/footer.php'; ?>

