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
    <title>Documents</title>
  </head>

<body>




<!----------Navbar----------->
    <nav class="navbar navbar-expand-lg" style="background-color:#E8EDC3;">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutt.php">About</a>
              </li>

<!----------Dropdown----------->
            <div class= "dropdown">
              <ul>
              <li class="nav-link nav-item-dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" 
                data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
              </svg>
                <span> Products </span>
                </a>
                </li>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Dawg</a></li>
                  <li><a class="dropdown-item" href="#">Cad</a></li>
                  <li><a class="dropdown-item" href="#">Bunni</a></li>
                  <li><a class="dropdown-item" href="#">Fizh</a></li>
                  <li><a class="dropdown-item" href="#">Monke</a></li>
                </ul>
                </ul>
                </div>

<!-------------------Sign in-------------->
                <li class="nav-item nav-item-sign">
                  <a class="nav-link nav-item-2" href="signup.php">Sign Up!</a>
                </li>
                
                  <p class="or"> or </p>

<!------------------Sign up-------------->        


                <li class="nav-item nav-item-sign">
                  <a class="nav-link nav-item-3" href="signin.php">Sign In!</a>
                  </li>
                </li>
            </ul>
          </div>
        </div>
      </nav>

<!------End of Navbar------------------>

<div class="container py-5">
    <div class="jumbotron text-white jumbotron-image shadow">
      <img src="https://drive.google.com/uc?export=view&id=146TRmqwcFmdOTcynl8wxtsJ_OD43jPZC" class="jumbotron-image">
      <h2 class="mb-4">
        Jumbotron with background image
      </h2>
      <p class="mb-4" style="color: purple">
    Man's bestfriend just got even better.
      </p>
      
    </div>
  </div>



<!-------Best Sellers--------->

<div class="card-group">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Cad</h5>
      <p class="card-text">Product 1</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Dawg</h5>
      <p class="card-text">Product 2</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Bunni</h5>
      <p class="card-text">Product 3</p>
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