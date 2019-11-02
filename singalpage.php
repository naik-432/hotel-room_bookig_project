<?php   
include('classes/addroomclass.php');

$obj=new Addroom;
// var_dump($obj);
// die();
if (isset($_GET['id'])) {
  $roomproduct=$obj->getsingalpageroomData($_GET['id']);
  // var_dump($roomproduct);
  // die();

}




?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css1/bootstrap.min.css"/>
	<link rel="stylesheet" href="css1/font-awesome.min.css"/>
	<link rel="stylesheet" href="css1/flaticon.css"/>
	<link rel="stylesheet" href="css1/slicknav.min.css"/>
	<link rel="stylesheet" href="css1/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css1/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css1/animate.css"/>
	<link rel="stylesheet" href="css1/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	
	<!-- Header section end -->


	<!-- Page info -->
	
	<!-- Page info end -->


	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="back-link">
				<a href="index.php"> &lt;&lt; Back to HOME</a>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img target="_blank" class="product-big-img" src="<?php echo $roomproduct['image'];?>" alt="">
					</div>
					<div class="product-thumbs" tabindex="" style="overflow: hidden; outline: none;">
						<div class="product-thumbs-track">
							<div class="pt active" data-imgbigurl="<?php echo $roomproduct['image1'];?>"><img src="<?php echo $roomproduct['image1'];?>" alt=""></div>
							<div class="pt" data-imgbigurl="<?php echo $roomproduct['image2'];?>"><img src="<?php echo $roomproduct['image2'];?>" alt=""></div>
							<div class="pt" data-imgbigurl="<?php echo $roomproduct['image'];?>"><img src="<?php echo $roomproduct['image'];?>" alt=""></div>
							<!-- <div class="pt" data-imgbigurl="img/single-product/3.jpg"><img src="img/single-product/thumb-3.jpg" alt=""></div>
							<div class="pt" data-imgbigurl="img/single-product/4.jpg"><img src="img/single-product/thumb-4.jpg" alt=""></div> -->
						</div>
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title"><?php echo $roomproduct['categoryname'];?></h2>
					<h3 class="p-price">RS:<?php  echo $roomproduct['price'];?></h3>
				
					
					
					
					
					<a   class="site-btn" target="_blank"  href="model.php?id=<?php echo $roomproduct['addroom_id'];?>">GO_TO_Booking</a>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Detailes.</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p><?php echo $roomproduct['discription'];?></p>
								</div>
							</div>
						</div>
						
						
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- <div class="container">

      <form class="form-signin" action="singalpage.php" method="POST" id="form">
      

    
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                      	     <h4 class="modal-title">Booking now</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     
                      </div>
                      <div class="modal-body">
                          <p>CHECK IN.</p>
                          <input type="date" name="date" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                       <div class="modal-body">
                          <p>CHECK OUT.</p>
                          <input type="date" name="date1" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" name="submit" type="submit">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
      

      </form>

    </div> -->
	<!-- product section end -->


	<!-- RELATED PRODUCTS section -->
	
	<!-- RELATED PRODUCTS section end -->


	<!-- Footer section -->
	<section class="footer-section">
		
		<div class="social-links-warp">
			<div class="container">
			

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js1/jquery-3.2.1.min.js"></script>
	<script src="js1/bootstrap.min.js"></script>
	<script src="js1/jquery.slicknav.min.js"></script>
	<script src="js1/owl.carousel.min.js"></script>
	<script src="js1/jquery.nicescroll.min.js"></script>
	<script src="js1/jquery.zoom.min.js"></script>
	<script src="js1/jquery-ui.min.js"></script>
	<script src="js1/main.js"></script>

	</body>
</html>
