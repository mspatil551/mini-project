<?php
 $gmailname =$_GET['gmail'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>jwellaryshop-Testnomial</title>
  <link rel="stylesheet" href="./asset/font/OFL.txt">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../new bootstrap/bootstrap-5.0.1-dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="style.css">
     <!-- font awsome icon -->
    <link rel="stylesheet" href="./asset/icon/fontawesome-free-5.15.2-web/css/all.min.css">
</head>
<body>
<div class="container-fluid">
     <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
             <div class="container">
                 <a class="navbar-brand" href="index.php"><h3 class="text-warning"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></i>Jewellery<span class="text-success">shop</span></h3></a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#home"
                     aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="home">
                      <ul class="navbar-nav mx-auto text-center">
                          <li class="nav-item ">
                              <a href="index.php" class="nav-link active">HOME</a>
                          </li>
                          <li class="nav-item">
                              <a href="contactus.php?gmail=<?php echo $gmailname ?>" class="nav-link ">Contact us</a>
                          </li>
                          <li class="nav-item">
                              <a href="testnomial.php?gmail=<?php echo $gmailname ?>" class="nav-link ">Testnomial</a>
                          </li>
                          <li class="nav-item dropdown">
                              <a href="" class="nav-link dropdown-toggle"id="product"data-bs-toggle="dropdown"data-bs-target="#product">Products</a>
                              <ul class="dropdown-menu"aria-labeledby="product">
                                <li><a href="cards.php?name=necklace" class="dropdown-item">Necklace</a></li>
                                <li><a href="cards.php?name=watch" class="dropdown-item">Watch</a></li>
                                <li><a href="cards.php?name=earring" class="dropdown-item">Earring</a></li>
                                <li><a href="cards.php?name=diamondring" class="dropdown-item">Dimand ring{woman}</a></li>
                                <li><a href="cards.php?name=ring" class="dropdown-item">Dimand ring{men}</a></li>
                                <li><a href="cards.php?name=cap" class="dropdown-item">Cap</a></li>
                                <li><a href="cards.php?name=babyshop" class="dropdown-item">Babyjwellary</a></li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a href="steptoby.php?gmail=<?php echo $gmailname ?>" class="nav-link ">Step to Buy</a>
                          </li>
                          <li class="nav-item">
                              <a href="engagement.php" class="nav-link ">Engagement Ring</a>
                          </li>
                          <li class="nav-item ml-5">
                              <a href="" class="nav-link "><i class="fas fa-search"></i></a>
                          </li>
                          <li class="nav-item ml-5">
                              <a href="" class="nav-link ">
                              <button class="btn btn-outline-success text-light"><i class="fa fa-user" aria-hidden="true"></i><span>User Account</span></button>
                              </a>
                          </li> 
                      </ul>
                 </div>
             </div>
         </nav>
 </div>

  <!-- end of navbar -->
  <div class="container">
  <div class="pt-5"> <h1 class="text-center text-danger mt-5 text-new">Testnomial</h1></div>
  </div>
  <div class="container mt-3">
  <div class="row">
  <?php
  include "connection.php";
  $selectquery="SELECT * FROM contactusform";
  $query=mysqli_query($con,$selectquery);
  while($userdata=mysqli_fetch_array($query)){
    ?>
    
      <div class=" col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="card mt-3">
         <div class="card-body p-3">
         <h3 class="text-warning"><?php echo $userdata['fullname'] ?></h3>
          <h5 class="text-success"><?php echo $userdata['email'] ?></h5>
          <p><?php echo $userdata['msg'] ?></p>
         </div>
      </div>
    </div>
    <?php 
  }
  ?>
  </div>
  </div>
    <!-- start of footer -->
<div class="container-fluid mt-5 alert alert-secondary">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-10 col-12 mx-auto">
        <a class="nav-link" href="index.php"><h3 class="text-warning"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></i>Jewellery<span class="text-success">shop</span></h3></a>
        <p class="my-2">We are a team of designers and developers that crete high quality product,with less prices.</p>
        <div class="d-flex text-dark">
          <h1>
           
          <i class="fab fa-facebook  new" aria-hidden="true"></i>
          <i class="fab fa-twitter new" aria-hidden="true"></i>
          <i class="fab fa-google new" aria-hidden="true"></i>
          <i class="fab fa-instagram new" aria-hidden="true"></i>
 
          </h1>
        </div>
        </div>
            <div class="col-lg-4 col-md-6 col-sm-10 col-12 mx-auto">
               <h2 class="text-danger text-new">About Us</h2>
               <h4 class="text-warning my-3"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="text-dark"> Address:The Barn, Ullenhall, Henley in Arden B578 5CC,Aurangabad</span></h1>
               <h4 class="text-warning my-3"><i class="fas fa-phone" aria-hidden="true"></i><span class="text-dark"> Call Us: +123 321 345</span></h1>
               <h4 class="text-warning my-3"> <i class="fa fa-envelope" aria-hidden="true"></i> <span class="text-dark">  Email:jwellaryshop@gmail.com</span></h1>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 col-12 mx-auto">
              <h2 class="text-danger text-new">Sign Up For Newsletter</h2>
              <p>Suscribe to our newsletter now and stay up-to-date with new collections.</p>
              <div class="input-group">
              <input type="text" class="form-control"placeholder="Enter your Email">
              <button class="btn btn-danger"><h3><i class="fa fa-envelope" aria-hidden="true"></i></h3></button>
              </div>
            </div>
      </div>
    </div>
    <section>
    <div class="container-fluid text-center text-light bg-danger">
      developed by mahesh patil  &copy;copyride from 2020-21 | All copyride are reserved
    </div>
</section>
   <script src="../new bootstrap/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"> </script>
   
</body>
</html>