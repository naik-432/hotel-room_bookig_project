<?php
include('classes/addroomclass.php');
$obj=new Addroom;


if (isset($_POST['submit'])) {
  $category=$_POST['categoryname'];
  $price=$_POST['price'];
  $discription=$_POST['discription'];
  
   $banner=$_FILES['image']['name']; 
 $expbanner=explode('.',$banner);
 $bannerexptype=$expbanner[1];

 $rand=rand(10000,99999);
  $bannername=$rand.'.'.$bannerexptype;

 $bannerpath="banners/".$bannername;
 move_uploaded_file($_FILES["image"]["tmp_name"],$bannerpath);
// 
 $bannerimage=$_FILES['image1']['name']; 
 $expbannerimage=explode('.',$bannerimage);
 $bannerexptypeimage=$expbannerimage[1];

 $randimage=rand(10000,99999);
  $bannernameimage=$randimage.'.'.$bannerexptypeimage;

 $bannerpathimage="banners/".$bannernameimage;
 move_uploaded_file($_FILES["image1"]["tmp_name"],$bannerpathimage);
// 
 $bannerimage1=$_FILES['image2']['name']; 
 $expbannerimage1=explode('.',$bannerimage1);
 $bannerexptypeimage1=$expbannerimage1[1];

 $randimage1=rand(10000,99999);
  $bannernameimage1=$randimage1.'.'.$bannerexptypeimage1;

 $bannerpathimage1="banners/".$bannernameimage1;
 move_uploaded_file($_FILES["image2"]["tmp_name"],$bannerpathimage1);

  $obj->SaveroomData($category,$bannerpath,$bannerpathimage,$bannerpathimage1,$price,$discription);
  
}

$category=$obj->gellAllcategoryData();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add room</title>
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
    <div class="site-section site-section-sm" style="padding-top: 0px;margin-top:0px">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 ">
          
            <center>
          
            <form action="addroom.php" method="POST" class="p-5 bg-white" enctype="multipart/form-data">
            	<h1>Add-Room</h1>


              
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname" style="padding-right: 900px">Category</label>
                    <select class="form-control" name="categoryname" required>
                    <option>Choose session</option>
                    <?php foreach($category as $categorys):?>

                      <option value="<?php echo  $categorys['category_id'];?>"><?php echo $categorys['categoryname'];?></option>
                      <?php endforeach;?>
                
                    
                  </select>
                </div>
              </div>
               <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname" style="padding-right: 900px">image</label>
                  <input type="file" id="fullname" name="image" class="form-control" placeholder="1">
                </div>
              </div>
               <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname" style="padding-right: 900px">image1</label>
                  <input type="file" id="fullname" name="image1" class="form-control" placeholder="Room_Category-Name...">
                </div>
              </div>
               <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname" style="padding-right: 900px">image2</label>
                  <input type="file" id="fullname" name="image2" class="form-control" placeholder="Room_Category-Name...">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname" style="padding-right:950px">price</label>
                  <input type="text" id="fullname" name="price" class="form-control" placeholder="Rs:00...">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname" style="padding-right: 900px">Discription</label>
                  <input type="text" id="fullname" name="discription" class="form-control" placeholder="Room_Discription...">
                </div>
              </div>

              <div class="row form-group">
        
                <div class="col-md-12">
                  <input type="submit"  name="submit" value="Submit" class="btn btn-primary pill px-4 py-2">
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
    

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>

  </body>
</html>
