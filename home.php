<?php 
session_start();
if(isset($_SESSION['id']) && $_SESSION['user_name'] && $_SESSION['email']){


?>

<!-- <!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
</head>
<body>

<h1>Hello, </h1>
<a href="logout.php">Logout</a>

</body>
</html> -->



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Airticket Booking</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- owl carousel style -->
   <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">

      
</head>

<body>
   <!--header section start -->
   <div class="header_section">
      <div class="header_bg">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="index.html"><img src="images/logo.png" style="height: 80px;"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home</a>
                     </li>
                     
                     <li class="nav-item">
                        <a class="nav-link" href="new_booking.php">New Booking</a>
                     </li>

                     <li class="nav-item">
                        <a class="nav-link" href="my_booking.php">My Booking</a>
                     </li>
                     
                  </ul>
                  <div class="call_section">
                     <ul>
                        <li>Welcome, <?php echo $_SESSION['user_name']; ?></li>
                        <li><a href="logout.php" ><img src="images/logout-icon.png"> Logout</a></li>

                
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <!--banner section start -->
      <div class="banner_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">AIR TECH</h1>
                              <p class="banner_text">Best Quality Air Services in The World</p>
                              <div class="btn_main">
                                
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="images/img-1.png" style="height: 350px"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">AIR TECH</h1>
                              <p class="banner_text">Best Quality Air Services in The World</p>
                              <div class="btn_main">
                                
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="images/img-9.png" style="height: 350px"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">AIR TECH</h1>
                              <p class="banner_text">Best Quality Air Services in The World</p>
                              <div class="btn_main">
                                
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="images/img-10.png" style="height: 350px"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left" style="font-size:24px"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right" style="font-size:24px"></i>
            </a>
         </div>
      </div>
      <!--banner section end -->
   </div>
   <!--header section end -->
   <!-- services section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_taital"><span style="color: #fcce2d">Our</span> Flights</h1>
         <div class="services_section_2">
         <div class="row">
               <div class="col-md-6">
                  <div class="image_main">
                     <img src="images/img-16.png" class="image_8" style="height: 300px">
                     <div class="text_main">
                        <div class="seemore_text">SyberJet (SJ30i)</div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="image_main">
                     <img src="images/img-14.png" class="image_8" style="height: 300px">
                     <div class="text_main">
                        <div class="seemore_text">HondaJet Elite (HA-420)</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="image_main">
                     <img src="images/img-15.png" class="image_8" style="height: 300px">
                     <div class="text_main">
                        <div class="seemore_text">HondaJet Elite (HA-420)</div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="image_main">
                     <img src="images/img-17.png" class="image_8" style="height: 300px">
                     <div class="text_main">
                        <div class="seemore_text">Cirrus (SF50)</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- services section end -->
   <!-- about section start -->
   <div class="news_section layout_padding">
      <div class="container">
         <h1 class="news_taital">About Us</h1>
         <p class="news_text">Welcome to our website. We provide best quality air services, foods, and other services.</p>
         <div class="news_section_2">
            <div class="row">
               <div class="col-md-6">
                  <div class="news_taital_box">
                     <p class="date_text">28 May 2023</p>
                     <h4 class="make_text">Make it easier</h4>
                     <p class="lorem_text">We provides lots of services to all the persons in the world. We also provides best quality airbuses with minimul cost.</p>
                     <p class="post_text">Post By : Jimmy Anderson</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <img src="images/img-6.png" class="image_6" style="width:100%">
                  <h6 class="plus_text">+</h6>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
   <!-- blog section start -->
   <div class="blog_section layout_padding">
      <div class="container">
         
      </div>
   </div>
   <!-- blog section end -->
   <!-- client section start -->
   <div class="client_section layout_padding">
      <div id="main_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <h1 class="client_taital">Our Team</h1>
                  <div class="client_section_2">
                     <div class="client_left">
                        <div><img src="images/client-img1.png" class="client_img" style="height: 200px;"></div>
                     </div>
                     <div class="client_right">
                        <h3 class="client_name">Jimmy Anderson</h3>
                        <p class="client_text">CEO & Founder</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <h1 class="client_taital">Our Team</h1>
                  <div class="client_section_2">
                     <div class="client_left">
                        <div><img src="images/client-img2.png" class="client_img" style="height: 200px;"></div>
                     </div>
                     <div class="client_right">
                        <h3 class="client_name">Jony William</h3>
                        <p class="client_text">Team Manager</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <h1 class="client_taital">Our Team</h1>
                  <div class="client_section_2">
                     <div class="client_left">
                        <div><img src="images/client-img.png" class="client_img" style="height: 200px;"></div>
                     </div>
                     <div class="client_right">
                        <h3 class="client_name">Jack Watson</h3>
                        <p class="client_text">Air Pilot</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
         </a>
         <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right" style="font-size:24px"></i>
         </a>
      </div>
   </div>
   <!-- client section end -->
   <!-- newsletter section start -->
   <div class="newsletter_section layout_padding">
      <div class="container">
         <div class="newsletter_main">
            <h1 class="newsletter_taital">Get<br> Your free cancellation </h1>
          
         </div>
         <p class="dolor_text">Passengers can cancel tickets without any cost. No cancellation fee or chnages is applicable for any airlines which are provided by us. </p>
      </div>
   </div>
   <!-- newsletter section end -->

   <!-- contact section start -->
   <div class="contact_section layout_padding">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 padding_left0">
               <div class="mail_section">
                  <div class="contact_img">
                     <h1 class="contact_taital">Best Quality Flight Services In World Here</h1>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="map_main"><img src="images/map-img.png"></div>
            </div>
         </div>
      </div>
   </div>
   <!-- contact section end -->
   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         
        
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>

<?php

}else{
    header("location: login.php");
    exit();
}
?>