<?php
include('classes/categoryclass.php');
$obj=new Category;

if(isset($_POST['submit'])) {
	$categoryname=$_POST['categoryname'];
	$obj->SaveCategory($categoryname);

}
$category=$obj->gellAllcategoryData();





?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Category</title>
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
  
   <!-- .site-mobile-menu -->
    
    
   
  
    
   

    
    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 ">
          
            <center>
          
            <form action="category.php" method="POST" class="p-5 bg-white">
            	<h1>Add_Category</h1>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Category-Name</label>
                  <input type="text" id="fullname" name="categoryname" class="form-control" placeholder="Room_Category-Name..." required="">
                </div>
              </div>

              <div class="row form-group">
        
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Submit" class="btn btn-primary pill px-4 py-2">
                </div>

              </div>

  
            </form>
            </center>
          </div>

         
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
