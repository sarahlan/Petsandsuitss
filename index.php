<!DOCTYPE html>
<html lang="en">
<head>  
    <!--Required meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b6acd16b3.js" crossorigin="anonymous"></script>
    <a href= "array.php">;
    <a href= "switch.php">;
    <title>Document</title>
  </head>

<body>

    <!----------Navbar----------->

    <nav class="navbar navbar-expand-lg" style="background-color: #E8EDC3;">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item-dropdown">
                <a class="nav-link dropdown-toggler" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Products
                  <i class="fa-solid fa-angle-down">
                  </i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Dawg</a></li>
                  <li><a class="dropdown-item" href="#">Cad</a></li>
                  <li><a class="dropdown-item" href="#">Bunni</a></li>
                  <li><a class="dropdown-item" href="#">Fizh</a></li>
                  <li><a class="dropdown-item" href="#">Monke</a></li>
                </ul>
                <li class="nav-item-sign">
                  <a class="nav-link-2" href="#">Sign Up</a>
                  <p class="or"> or </p>
                  <a class="nav-link-3" href="#">Sign In!</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>

<!------End of Navbar-->



<!-----Carousel------->

<div class="slideshow-container">

  <div class="mySlides fade">
    <img src="images/grouppic.png" style="width:100%" >
    <div class="text"></div>
  </div>
  
  <div class="mySlides fade">
    <img src="images/robocat.png" style="width:100%">
  </div>
  
  <div class="mySlides fade">
    <img src="images/BUNNYINTHEPARK.png" style="width:100%">
  </div>
  
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
  </div>

  <br>
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
  </div>
  <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>
    
<!--------End of Carousel------>



<!-------Best Sellers--------->

<div class="card-group">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

<footer class="footer mt-auto py-3 by-dark ">
<!-- Footer -->
<footer class="text-center text-white" style="background-color: #9AC2C5;">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-square"></i></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter-square"></i></a>
      
      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram-square"></i></a>
       <!-- Linkedin -->
       <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
       ><i class="fab fa-linkedin-in"></i
     ></a>

     <!-- Github -->
     <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
       ><i class="fab fa-github"></i
     ></a>
   </section>
   <!-- Section: Social media -->
  </footer>
  <!-- Footer -->
</footer>


</body>
</html>