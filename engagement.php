 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>jwellaryshop-Engagement ring</title>
  <link rel="stylesheet" href="../new bootstrap/bootstrap-5.0.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./asset/icon/fontawesome-free-5.15.2-web/css/all.min.css">
  <link rel="stylesheet" href="./asset/font/OFL.txt">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <style>
     .myimg{
        background-image: url("./asset/images/engring.jpg");
    height: 100vh; 
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-position:center;
    display: flex;
    justify-content: flex-start;
    align-items:center ;
     } 
     .myimg .text{
        height:40vh;
        width:60vw;
     }  
     .engslider{
     background-image:url("./asset/images/actress.jpg");
     height: 50vh; 
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position:left;
     }
     .secondback{
        background-image:url("./asset/images/eng4.png");
         height: 50vh; 
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position:bottom;
     }
  </style>
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
  <!-- engagement home section start -->
  <div class="container-fluid myimg">
    <div class="text text-light">
        <h5><i class="fa fa-life-ring" aria-hidden="true"></i> YOUR DREAM RING</h5>
        <h1 class="text-new display-1 text-danger fw-bolder">Engagement Ring</h1> <br>
        <p class="text-warning">The superlative beauty of our engagement rings is result of the highest quality standards and an obsession with creating the most brillient diamonds at every step.</p>
        <a href="#collection" class="btn btn-outline-light btn-lg">VIEW ALL COLLECTION</a>
    </div>
  </div>
  <!-- engagement home section end -->
  <div class="container mt-3">
     <div class="row">
         <div class="col-lg-6 col-md-10 col-sm-12 col-12 mx-auto">
             <a href="cards.php?name=earring">
             <img src="./asset/images/eng1.png" class="img-fluid" alt="img">
             </a>
         </div>
         <div class="col-lg-6 col-md-10 col-sm-12 col-12 mx-auto">
            <a href="cards.php?name=diamondring">
            <img src="./asset/images/eng2.png" class="img-fluid" alt="img">
            </a>
         </div>
     </div>
  </div>
  <!-- end of engagement card -->
   
    <div class="cotainer-fluid myslider">
        <div class="engslider"></div>
        <h1 class="display-1 fw-bolder text-new text-danger">To Share Your Love One </h1>
        <div class="secondback"></div>
    </div>
    <!-- engagement slider end -->
    <div class="container" id="collection">
    <h1 class="text-new text-center text-danger my-3">Ring collection</h1>
    <hr class="text-success">
     <div class="row ">
        <div class="col-lg-6 col-md-10 col-sm-12 col-12 mx-auto mt-4">
            <a href="cards.php?name=diamondring">
            <img src="./asset/images/eng3.png" class="img-fluid" alt="">
            </a>
        </div>
        <div class="col-lg-6 col-md-10 col-sm-12 col-12 mx-auto">
             <div class="row">
                <div class="col-6">
                    <a href="shopcard.php?nav=golden%20and%20single%20diamond%20ring">
                    <img src="./asset/images/dimand ring/ring7.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-6">
                    <a href="shopcard.php?nav=golden%20color%20ring">
                    <img src="./asset/images/dimand ring/ring5.jpg" class="img-fluid" alt="">
                    </a>
                </div>
             </div>
             <div class="row">
                <div class="col-6">
                    <a href="shopcard.php?nav=silver%20diamond%20ring%20best%20for%20wedding">
                    <img src="./asset/images/dimand ring/ring1.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-6">
                   <a href="shopcard.php?nav=golden%20and%20single%20diamond%20ring">
                   <img src="./asset/images/dimand ring/ring7.jpg" class="img-fluid" alt="">
                   </a>
                </div>
             </div>
        </div>
     </div>
    </div>
    <!-- footer start -->
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
    <!-- footer end -->
</body>
</html>