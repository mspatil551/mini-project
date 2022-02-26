<?php
session_start();
$name=$_SESSION['new'];
include "connection.php";
$nav=$_GET['nav'];
// echo $name;
// echo $ids;
 $selectquery="SELECT * FROM $name WHERE name='$nav'";
 $dat=mysqli_query($con,$selectquery);
 //$num = mysqli_num_rows($data);
// echo $num;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name ?>- <?php echo $nav?> </title>
    <link rel="stylesheet" href="./asset/icon/fontawesome-free-5.15.2-web/css/all.css">
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./asset/animate.css-main/animate.min.css">
    <style>
        .mylink{
    text-decoration: none;
    color:black;
        }
        .mytext{
            text-transform: capitalize;
        }
    </style>
</head>
<body>
    <div class="container">
        <p class="alert alert-dark mytext animate__animated animate__rubberBand"><a href="index.php"class="mylink">home</a> > <a href="cards.php?name=<?php echo $name ?>"class="mylink"><?php echo $name ?></a> > <a href=""class="mylink"><?php echo $nav ?></a></p>
        <div class="row">
            <div class="col-lg-5 col-md-10 col-sm-12 col-12">
            <?php 
        
        while($product=mysqli_fetch_array($dat)){
            ?>
              <img src="<?php echo $product['img'] ?>" class="img-fluid animate__animated animate__backInLeft" alt="">
                </div>
                <div class="col-lg-7 col-md-10 col-sm-12 col-12 animate__animated animate__backInRight">
                <h4 class="text-dark mytext"> <?php  echo $product['name'] ?> </h4>
                <p class="mt-3 mytext ">rating:  
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                </p>
                <h1 class="text-dark"> <span class="mytext">rs.</span><?php  echo $product['price'] ?> /- </h1> <br>
                <p class="mytext">available: <span class="text-success">IN STOCK <i class="fa fa-check-square" aria-hidden="true"></i></span></p>
                <h6 class="mytext">categary: <?php echo $nav ?>,<?php echo $name ?>best,collection <br> <br> right,new,arrialvals</h6> 
                <h4 class="mytext">color:blue</h4>  
                <div class="row ">
                    <div class="col-2">
                        <div class="alert alert-primary border border-dark "></div>
                    </div>
                    <div class="col-2">
                        <div class="alert alert-danger   "></div>
                    </div>
                    <div class="col-2">
                        <div class="alert alert-success   "></div>
                    </div>
                    <div class="col-2">
                        <div class="alert alert-secondary   "></div>
                    </div>
                    <div class="col-2">
                        <div class="alert alert-info   "></div>
                    </div>
                    <div class="col-2">
                        <div class="alert alert-warning   "></div>
                    </div>
                    <h4 class="mytext">size: M</h4>  
                    <div class="col-2">
                       <p class="boder border-dark">M</p>  
                    </div>
                    <div class="col-2">
                    <p class="boder border-dark">L</p>    
                    </div>
                    <div class="col-2">
                    <p class="boder border-dark">X</p>    
                    </div>
                    <div class="col-2">
                    <p class="boder border-dark">XL</p>    
                    </div>
                </div>
                <button class="btn btn-lg btn-warning"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ADD TO CART</button>
                <button class="btn btn-lg btn-danger"><i class="fa fa-bolt" aria-hidden="true"></i> BUY NOW</button>
                <button class="btn btn-lg btn-primary"><i class="fa fa-heart text-dark" aria-hidden="true"></i></button>
                </div>
              
                
 

            <?php
        }
    
       
       ?>
            
     
    </div>
</body>
</html>