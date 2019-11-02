<?php
include('classes/addroomclass.php');
$obj=new Addroom;


$addroom=$obj->gellAlladdroomData();





?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Show room</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
    <div class="container">
      <div class="row">
        
      

<div class="col-md-12">
        
              <center>    <h4 style="color: #c0c0c0">View Room</h4></center>
              <hr>
        
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th  >Category</th>
              <th >image</th>
                <th >image1</th>
                <th >image2</th>
                <th  >price</th>
                   <th  >Discription</th>
              
            </tr>
          </thead>
          
          <tbody>
            <?php foreach ($addroom as  $addrooms):?>
            <tr>
              <td><?php echo $addrooms['addroom_id'];?></td>
              <td ><?php   echo $addrooms['categoryname'];?></td>
              <td ><img src=" <?php echo $addrooms['image'];?>"width="100"></td>
                <td ><img src=" <?php echo $addrooms['image1'];?>"width="100"></td>
                <td><img src=" <?php echo $addrooms['image2'];?>"width="100"></td>
              
              <td><?php   echo $addrooms['price'];?></td>
              <td ><?php   echo $addrooms['discription'];?></td>
                
             
            </tr>
          <?php endforeach?>
            
           
            
            
          </tbody>
        </table>
        
      </div>
      </div>
    </div>





  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  
  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/main.js"></script>
  </body>
</html>