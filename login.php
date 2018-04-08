<!DOCTYPE html>
<html lang="en">
<head>
   <!-- =-=-=-=-=-=-= Including Header =-=-=-=-=-=-= -->
   <?php
   include("includes/header.php");
   ?>
</head>
<body>
   
   <div class="page-header-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="header-page">
                  <h1>User Sign In</h1>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Small Breadcrumb -->
   <div class="small-breadcrumb">
      <div class="container">
         <div class=" breadcrumb-link">
            <ul>
               <li><a href="index.php">Home Page</a></li>
               <li><a href="#">Pages</a></li>
               <li><a class="active" href="#">Sign In</a></li>
            </ul>
         </div>
      </div>
   </div>
   <!-- Small Breadcrumb -->
   <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
   <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
   <div class="main-content-area clearfix">
      <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
      <section class="section-padding error-page pattern-bg ">
         <!-- Main Container -->
         <div class="container">
            <!-- Row -->
            <div class="row">
               <!-- Middle Content Area -->
               <div class="col-md-5 col-md-push-7 col-sm-6 col-xs-12">
                  <!--  Form -->
                  <div class="form-grid">
				  <?php display_message(); ?>
			      <?php validate_user_login(); ?>
                     <form method="post">
                        <div class="form-group">
                           <label>Email</label>
                           <input placeholder="Your Email" class="form-control" type="email" name="email" required>
                        </div>
                        <div class="form-group">
                           <label>Password</label>
                           <input placeholder="Your Password" class="form-control" type="password" name="password" required>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-xs-12">
                                 <div class="skin-minimal">
                                    <ul class="list">
                                       <li>
                                          <input  type="checkbox" id="minimal-checkbox-1" name="remember_me">
                                          <label for="minimal-checkbox-1">Remember Me</label>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <button class="btn btn-theme btn-lg btn-block">Login With Us</button>
                     </form>
                  </div>
                  <!-- Form -->
               </div>
               <div class="col-md-7  col-md-pull-5  col-xs-12 col-sm-6">
                  <div class="heading-panel">
                     <h3 class="main-title text-left">
                        Sign In to your account   
                     </h3>
                  </div>
                  <div class="content-info">
                     <div class="features">
                        <div class="features-icons">
                           <img src="images/icons/chat.png" alt="img">
                        </div>
                        <div class="features-text">
                           <h3>Chat & Messaging</h3>
                           <p>
                              Access your chats and account info from any device.
                           </p>
                        </div>
                     </div>
                     <div class="features">
                        <div class="features-icons">
                           <img src="images/icons/panel.png" alt="img">
                        </div>
                        <div class="features-text">
                           <h3>User Dashboard</h3>
                           <p>
                              Maintain a wishlist by saving your favourite items.
                           </p>
                        </div>
                     </div>
                     <span class="arrowsign hidden-sm hidden-xs"><img src="images/arrow.png" alt="" ></span>
                  </div>
               </div>
               <!-- Middle Content Area  End -->
            </div>
            <!-- Row End -->
         </div>
         <!-- Main Container End -->
      </section>
      <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
   </div>
   <!-- Main Content Area End --> 
   
   <!-- Back To Top -->
   <a href="#0" class="cd-top">Top</a>
   <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
   <script src="js/jquery.min.js"></script>
   <!-- Bootstrap Core Css  -->
   <script src="js/bootstrap.min.js"></script>
   <!-- Jquery Easing -->
   <script src="js/easing.js"></script>
   <!-- Menu Hover  -->
   <script src="js/forest-megamenu.js"></script>
   <!-- Jquery Appear Plugin -->
   <script src="js/jquery.appear.min.js"></script>
   <!-- Numbers Animation   -->
   <script src="js/jquery.countTo.js"></script>
   <!-- Jquery Smooth Scroll  -->
   <script src="js/jquery.smoothscroll.js"></script>
   <!-- Jquery Select Options  -->
   <script src="js/select2.min.js"></script>
   <!-- noUiSlider -->
   <script src="js/nouislider.all.min.js"></script>
   <!-- Carousel Slider  -->
   <script src="js/carousel.min.js"></script>
   <script src="js/slide.js"></script>
   <!-- Image Loaded  -->
   <script src="js/imagesloaded.js"></script>
   <script src="js/isotope.min.js"></script>
   <!-- CheckBoxes  -->
   <script src="js/icheck.min.js"></script>
   <!-- Jquery Migration  -->
   <script src="js/jquery-migrate.min.js"></script>
   <!-- Sticky Bar  -->
   <script src="js/theia-sticky-sidebar.js"></script>
   <!-- Style Switcher -->
   <script src="js/color-switcher.js"></script>
   <!-- Template Core JS -->
   <script src="js/custom.js"></script>
   <!-- =-=-=-=-=-=-= Including Footer =-=-=-=-=-=-= -->

   
   <?php
   require_once 'includes\footer.php';
   ?>
</body>
</html>

