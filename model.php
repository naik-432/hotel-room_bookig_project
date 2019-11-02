<?php   
include('classes/checkclass.php');
$obj=new Check;


if (isset($_POST['submit'])) {
  $check1 = $_POST['date'];
  $check2 = $_POST['date1'];
 



  $date=date_create("".$check1."");
$date1=date_create("".$check2."");
$diff=date_diff($date,$date1);
  $totalday =$diff->format("%a");
  // echo $totalday;
  // echo $_GET['id'];
  // die();
  $save=$obj->SaveDate($check1,$check2,$totalday,$_GET['id']);

}
if (isset($_GET['id'])) {
  $roomproduct=$obj->getsingalpageroomData($_GET['id']);
  // var_dump($roomproduct);
  // die();

}




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booking </title>
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
  <body style="background-image: url(images/hero_1.jpg);  ">
    <div class="container">
      <center>
<a  style="padding-top: 10px; margin-top:300px; font-size: 40px;border-radius:50px" href="<?php $roomproduct['addroom_id'];?>" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" style="float:right;" name="job" onclick="testFunction(<?php echo $ad['id'];?>)"><i><b>Booking NOW</b></i>
               </a>
</center>


 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: dodgerblue;">
            <h4 class="modal-title" style="color: white;">Enter your Date! </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
          <p>Please Enter your  Detailes! </p>
          <form action="" method="POST" >
            <hr>
            <p>CHECK IN.</p>
            <hr>
            <input type="date" name="date" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
            <hr>
            <p>CHECK OUT.</p>
            <hr>
            <input type="date" name="date1" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

            <hr>

            <input style="margin-left: 170px" type="submit" name="submit" value="Submit" id="submit" class="btn btn-success">
          </form>
        </div>
        <div class="modal-footer">
 <button type="button" id="sub" onclick="myfunction()" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
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

  <script type="text/javascript">

    $('#submit').on('click',function(){
      var budget = $("#input-budget").val();
      var addid = $("#hidden-ad-value").val();


    
      $.ajax({
      url:"viewads.php",
       type:"POST",
       data:"budgets=" + budget + "&addi=" + addid + "&ok="+1,

       success: function(result){
        alert(result);
        $("#myModal .close").click()
        $("#input-budget").val("");
       }


      });
    

  
});
  
</script>
<script type="text/javascript">
  $('#submit').onclick(function(){
     alert('Your room is booked:');
  } );
</script>
<script>
$(document).ready(function(){
  $("#sub").click(function(){
    alert("Your room is booked:");
  });
});
</script>

  </body>
</html>



   

   <!-- Model End -->