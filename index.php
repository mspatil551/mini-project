<?php 
session_start();
$gmailname=$_SESSION['gmail'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>jwellaryshop homepage</title>
    
  <link rel="stylesheet" href="./asset/font/OFL.txt">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../new bootstrap/bootstrap-5.0.1-dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="style.css">
     <!-- font awsome icon -->
    <link rel="stylesheet" href="./asset/icon/fontawesome-free-5.15.2-web/css/all.min.css">
</head>
<style>
  .card-img{
    height:40vh;
  }
  ul.navbar-nav{
    display:flex;
    justify-content:space-around;
    margin-left:15px;
  }
  .round{
    border-radius:30%;
  }
</style>

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
                          <li class="nav-item ml-5 dropdown">
                          <a href="" class="nav-link dropdown-toggle btn btn-outline-success"id="userbtn"data-bs-toggle="dropdown"data-bs-target="#userbtn"><i class="fa fa-user"></i>User Account</a>
                              <ul class="dropdown-menu"aria-labeledby="userbtn">
                                <li><a href="" class="dropdown-item">
                                  <div class="card-0 card-md">
                                    <?php
                                    include "connection.php";
                                    $gmailquery="SELECT * FROM register WHERE email='$gmailname'";
                                    $data=mysqli_query($con,$gmailquery);
                                    while($product=mysqli_fetch_array($data)){
                                        ?>
                                        <div class="card-header-0">
                                          <p class="text-center text-dark">personal information</p>
                                          <h1 class="text-primary text-center img-thumbnail round alert alert-secondary"><i class="fa fa-user" aria-hidden="true"></i></h1> 
                                          <p class="text-dark text-center"><i class="fa fa-user" aria-hidden="true"></i><?php echo $product['name'] ?></p>
                                        <p class="text-dark text-center"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $product['email'] ?></p>
                                        <p class="text-dark text-center"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $product['phone'] ?></p>
                                       <div class="btn-group w-100">
                                       <button class="btn alert alert-dark"><i class="fa fa-key" aria-hidden="true"></i></button>
                                        <button class="btn alert alert-dark"><i class="fab fa-facebook" aria-hidden="true"></i></button>
                                        <button class="btn alert alert-dark"><i class="fa fa-location-arrow" aria-hidden="true"></i></button>
                                       </div>
                                        <p class="text-dark"><i class="fab fa-google" aria-hidden="true"></i>Manage your google account</p>
                                       <a href="login.php"class="nav-link link-dark"> <p class="text-dark"><i class="fas fa-arrow-circle-right" aria-hidden="true"></i>Sign out</p></a>
                                        </div>
                                        <?php
                                    }
                                    
                                    ?>
                                    
                                  </div>
                                </a></li>
                                <li class="dropdown-item">
                                 <p>Other Profiles</p>
                                  

                                </li>
                              </ul>
                          </li>
                      </ul>
                 </div>
             </div>
         </nav>
 </div>
 <!-- end of nav bar -->
 <div class="container-fluid">
    <div class="home-img img-fluid">
        <div class="home-text ">
           <div>
           <h5 class="text-dark text-new">Someone Serial Design</h5>
            <h1 class="text-left text-danger display-1 fw-bolder">Show <span class="text-dark">Your <br>Personal</span> Style</h1>
            <a href="#shopnow"class="btn btn-dark btn-lg"><i class="fa fa-shopping-bag" aria-hidden="true"></i> SHOP NOW</a>
           </div>
        </div>
    </div>   
 </div>
 <!-- end of home page -->
 <div id="shopnow"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-10 col-12">
          <div class="card">
            <img src="./asset/images/girlsmodal1.png" class="img-fluid img-thumbnil" alt="img">
           </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-10 col-12">
           <div class="row">
           <div class="col-6">
               <a href="cards.php?name=diamondring"class="nav-link">
               <div class="card">
                 <img src="asset/images/dimand ring/ring4.jpg" class="img-fluid img-card" alt="img">
                 <h4 class="text-center link-dark">Diamond ring</h4>
                </div>
               </a>
             </div>
             <div class="col-6">
               <a href="cards.php?name=babyshop"class="nav-link">
               <div class="card">
                 <img src="asset/images/babyjwellary/babyshop6.png" class="img-fluid img-card" alt="img">
                 <h4 class="text-center link-dark">Babyshop</h4>
                </div>
               </a>
             </div>
             <div class="col-6">
               <a href="cards.php?name=earring"class="nav-link">
               <div class="card">
                 <img src="asset/images/earring/earring.jpg" class="img-fluid img-card" alt="img">
                 <h4 class="text-center link-dark">Earring</h4>
                </div>
               </a>
             </div>
             <div class="col-6">
               <a href="cards.php?name=necklace"class="nav-link">
               <div class="card">
                 <img src="asset/images/neklase/neklase2.jpg" class="img-fluid img-card" alt="img">
                 <h4 class="text-center link-dark">Necklace</h4>
                </div>
               </a>
             </div>
           </div>
        </div>    
    </div>   
     <!-- end of girls shop page  -->
    <div class="container">
       <div class="my-3 text-center">
       <h1 class=" text-danger text-new">Hot Trending</h1>  
       <p class="text-dark mt-2">Check out top trending this month.</p>   
       <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-10 col-12 mx-auto">
              <a href="shopcard.php?nav=ring%20for%20woman">
              <div class="card">
                  <img src="./asset/images/dimand ring/ring3.jpg" class="img-fluid" alt="img">
              </div>
              </a>
             <a href="shopcard.php?nav=woman%20wedding%20diamond%20ring">
             <div class="card mt-3">
                  <img src="./asset/images/dimand ring/ring2.jpg" class="img-fluid " alt="img">
              </div>
             </a>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-10 col-12 mx-auto">
             <a href="shopcard.php?nav=heart%20shape%20pandel"><div class="card">
             <img src="./asset/images/babyjwellary/babyshop9.png" class="img-fluid" alt="img">
             </div></a>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-10 col-12 mx-auto">x
             <a href="shopcard.php?nav=diamand%20ring">
             <div class="card">
                  <img src="./asset/images/dimand ring/ring11.jpg" class="img-fluid" alt="img">
              </div>
             </a>
             <a href="shopcard.php?nav=spring%20type%20diamand%20ring">
             <div class="card">
                  <img src="./asset/images/dimand ring/ring12.jpg" class="img-fluid" alt="img">
              </div>
             </a>
          </div>
       </div>                   
       </div>
    </div>
    <!-- end of girls shop trending -->
   <div class="cotainer-fluid">
   <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-10 col-12">
           <div class="row">
           <div class="col-6">
               <a href="cards.php?name=bracelet"class="nav-link">
               <div class="card">
                 <img src="asset/images/braslet/bracelet1.jpg" class="img-fluid img-card" alt="img">
                 <h4 class="text-center link-dark">Bracelet</h4>
                </div>
               </a>
             </div>
             <div class="col-6">
               <a href="cards.php?name=watch"class="nav-link">
               <div class="card">
                 <img src="asset/images/watch/watch1.png" class="img-fluid img-card" alt="img">
                 <h4 class="text-center link-dark">Watch</h4>
                </div>
               </a>
             </div>
             <div class="col-6">
               <a href="cards.php?name=cap"class="nav-link">
               <div class="card">
                 <img src="asset/images/cap/cap1.png" class="img-fluid img-card" alt="img">
                 <h4 class="text-center link-dark">Cap</h4>
                </div>
               </a>
             </div>
             <div class="col-6">
               <a href="cards.php?name=ring"class="nav-link">
               <div class="card">
                 <img src="asset/images/ring/ring1.jpg" class="img-fluid img-card" alt="img">
                 <h4 class="text-center link-dark">Mens Ring</h4>
                </div>
               </a>
             </div>
           </div>
        </div>   
        <div class="col-lg-6 col-md-6 col-sm-10 col-12">
          <div class="card">
            <img src="./asset/images/mensmodal.jpg" class="img-fluid img-thumbnil" alt="img">
           </div>
        </div> 
    </div>    
</div> 
  <!-- end of boys shop -->
   </div>
   <div class="container">
       <div class="my-3 text-center">
       <h1 class=" text-danger text-new">Hot Trending</h1>  
       <p class="text-dark mt-2">Check out top trending this month.</p>   
       <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-10 col-12 mx-auto">
              <div class="card">
                 <a href="shopcard.php?nav=om%20bracelet">
                 <img src="./asset/images/braslet/bracelet11.png" class="img-fluid" alt="img">
                 </a>
              </div>
              <div class="card mt-3">
                <a href="shopcard.php?nav=5%20combo%20bracelet">
                <img src="./asset/images/braslet/bracelet7.png" class="img-fluid " alt="img">
                </a>
              </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-10 col-12 mx-auto">
            <a href="shopcard.php?nav=silver%20watch">
            <img src="./asset/images/watch/watch2.png" class="img-fluid "style="height:70vh;" alt="img">
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-10 col-12 mx-auto">
              <div class="card ">
                 <a href="shopcard.php?nav=black%20and%20brown%20color%20cap">
                 <img src="./asset/images/cap/cap3.png" class="img-fluid" alt="img">
                 </a>
              </div>
              <div class="card mt-3">
                  <a href="shopcard.php?nav=diamond%20ring">
                  <img src="./asset/images/ring/ring7.jpg" class="img-fluid" alt="img">
                  </a>
              </div>
          </div>
       </div>                   
       </div>
    </div>
    <!-- End boys shop treding -->
    <div class="container-fluid">
        <div class="row">
          <div class="col-10 mx-auto">
             <a href="cards.php?name=diamondring">
             <div class="card">
                 <img src="./asset/images/card1.png" alt="" class="img-fluid">
             </div>
             </a>
          </div>
          <div class="col-10 mx-auto">
           <a href="cards.php?name=necklace">
           <div class="card">
                 <img src="./asset/images/card2.png" alt="" class="img-fluid">
            </div>
           </a>
          </div>
          <div class="col-10 mx-auto">
           <a href="cards.php?name=earring">
           <div class="card">
                 <img src="./asset/images/card3.png" alt="" class="img-fluid">
            </div>
           </a>
          </div>
        </div>
    </div>
    <!-- End of big card -->
    <div class="container-fluid slider mt-3">
       <div>
       <h1 class="text-new text-info text-center">Fasion product</h1>
        <h1 class="text-info fw-bolder display-1">Fasion is lifestyle.</h1>
       </div>
    </div> 
    <!-- End of slider -->
    <div class="container">
        <div class="row card-group mt-5">
           <div class="col-lg-4 col-md-6 col-sm-10 col-12 mx-auto">
              <div class="card text-dark text-center my-3">
                 <h1 class="my-3"><i class="fa fa-globe" aria-hidden="true"></i></h1>
                 <h3 class="">WORLDWIDE DELIVERY</h3>
                 <P class="my-2">We work with bigest delivery networks It doesn't matter where in the world your are. We deliver it to you.</P>
              </div>
           </div>
           <div class="col-lg-4 col-md-6 col-sm-10 col-12 mx-auto">
              <div class="card text-dark text-center my-3">
                 <h1 class="my-3"><i class="fa fa-truck" aria-hidden="true"></i></h1>
                 <h3 class="">FREE SHIPPING</h3>
                 <P class="my-2">Stop wondering about shipping costs what you see is what you pay. Our shipping is always free in every purchase.</P>
              </div>
           </div>
           <div class="col-lg-4 col-md-6 col-sm-10 col-12 mx-auto">
              <div class="card text-dark text-center my-3">
                 <h1 class="my-3"><i class="fas fa-wallet"></i></h1>
                 <h3 class="">MONEY BACK GURANTEE</h3>
                 <P class="my-2">Got a problem with the product? Don't worry, we have a 30 day money back guarantee see our return policy.</P>
              </div>
           </div>
        </div>
    </div>
    <!-- end of card icon section -->
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