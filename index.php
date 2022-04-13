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
    <title>Document</title>
  </head>

<body>

<!----------Navbar----------->
    <nav class="navbar navbar-expand-lg" style="background-color:#E8EDC3;">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>

<!----------Dropdown----------->
              <li class="nav-link nav-item-dropdown">
                <a class="nav-link fa-solid fa-arrow-down-long dropdown-toggler" href="#" id="navbarDropdownMenuLink" role="button" 
                data-bs-toggle="dropdown" aria-expanded="false"> Products </a>
                </li>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Dawg</a></li>
                  <li><a class="dropdown-item" href="#">Cad</a></li>
                  <li><a class="dropdown-item" href="#">Bunni</a></li>
                  <li><a class="dropdown-item" href="#">Fizh</a></li>
                  <li><a class="dropdown-item" href="#">Monke</a></li>
                </ul>


                <li class="nav-item nav-item-sign">
                  <a class="nav-link nav-item-2" href="#">Sign Up!</a>
                </li>
                  <p class="or"> or </p>
                <li class="nav-item nav-item-sign">
                  <a class="nav-link nav-item-3" href="#">Sign In!</a>
                  </li>
                </li>
            </ul>
          </div>
        </div>
      </nav>

<!------End of Navbar------------------>



<!-----Card------->
<div class="card">
  <img src="grouppic.png" class="card-img-top" alt="...">
  <div class="card-body">
  </div>
</div>



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