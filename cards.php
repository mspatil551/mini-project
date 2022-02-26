<?php 
session_start();
include "connection.php";
$name=$_GET['name'];
$_SESSION['new']=$name;
//echo $name;
$selectquery="SELECT * FROM $name";
$data=mysqli_query($con,$selectquery);
$num = mysqli_num_rows($data);
//echo $num;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product- <?php echo $name ?></title>
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<style>
  .card-img{
    height:40vh;
  }
 
        .mylink{
    text-decoration: none;
    color:black;
        }
        .mytext{
            text-transform: capitalize;
        }
    
</style>
<body>
    <div class="container">
    <p class="alert alert-dark mytext"><a href="index.php"class="mylink">home</a> > <a href="cards.php?name=<?php echo $name ?>"class="mylink"><?php echo $name ?></a></p>
    <div class="row ">
           
           <?php
               if($num>0){
                   while($product=mysqli_fetch_array($data)){
                       ?>
                        <div class="col-lg-4 col-md-6 col-sm-10 col-12 py-4">
                        <div class="card">
                        
                        <a href="shopcard.php?nav=<?php echo $product['name'] ?>">
                        <div class="card-header-0 ">
                            <img src="<?php echo $product['img'] ?>" class="img-fluid card-img"alt="">
                            </div>
                       </a>
                        
                        <div class="card-footer-0">
                        <h1 class="text-center text-danger"><?php echo $product['name'] ?>
                        
                        </h1>
                        <p class="text-center text-dark">
                        Rs.<?php echo $product['price'] ?>/-only
                        </p>
                        </div>
                        </div>
                       </div>
                       <?php
                   }
               }
              ?>
           </div>   
     </div>   
    </div>
</body>
</html>