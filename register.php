

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- =-=-=-=-=-=-= Including Header =-=-=-=-=-=-= -->
   <?php
   include("includes\header.php");
   ?>
</head>
<body>

   <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
   <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
   <div class="page-header-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="header-page">
                  <h1>Create Your Account</h1>
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
               <li><a class="active" href="#">Sign Up</a></li>
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
               <div class="col-md-5 col-md-push-7 col-sm-12 col-xs-12">
                  <!--  Form -->
                  <div class="form-grid">
				  <?php validate_user_registration(); ?>
                     <form method="post">
                        <div class="form-group">
                           <label>Name</label>
                           <input placeholder="Enter Your Name" class="form-control" type="text" name="name" required>
                        </div>
                        <div class="form-group">
                           <label>Contact Number</label>
                           <input placeholder="Enter Your Contact Number" class="form-control" type="text" name="contact_number" required>
                        </div>
                        <div class="form-group">
                           <label>Email</label>
                           <input placeholder="Your Email" class="form-control" type="email" name="email" required>
                        </div>
                        <div class="form-group">
                           <label>Password</label>
                           <input placeholder="Your Password" class="form-control" type="password" name="password" required>
                        </div>
						<div class="form-group">
                           <label>Confirm Password</label>
                           <input placeholder="Confirm Password" class="form-control" type="password" name="confirm_password" required>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-xs-12 col-sm-7">
                                 <div class="skin-minimal">
                                    <ul class="list">
                                       <li>
                                          <input  type="checkbox" id="minimal-checkbox-1">
                                          <label for="minimal-checkbox-1">i agree <a href="#">Terms of Services</a></label>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-5 text-right">
                                 <p class="help-block"><a data-target="#myModal" data-toggle="modal">Forgot password?</a>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <button class="btn btn-theme btn-lg btn-block">Register</button>
                     </form>
                  </div>
                  <!-- Form -->
               </div>

               <div class="col-md-7  col-md-pull-5  col-sm-12 col-xs-12">
                  <div class="heading-panel">
                     <h3 class="main-title text-left">
                        Create Your Account  
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
                     <div class="features">
                        <div class="features-icons">
                           <img src="images/icons/history.png" alt="img">
                        </div>
                        <div class="features-text">
                           <h3>Track History</h3>
                           <p>
                              Track the status of your ads history.
                           </p>
                        </div>
                     </div>
                     <div class="features">
                        <div class="features-icons">
                           <img src="images/icons/featured-listing.png" alt="img">
                        </div>
                        <div class="features-text">
                           <h3>features Listing</h3>
                           <p>
                              Get more value fro your ad.
                           </p>
                        </div>
                     </div>
                     <span class="arrowsign hidden-sm hidden-xs"><img src="images/arrow.png" alt=""></span>
                  </div>
               </div>
               <!-- Middle Content Area  End -->
            </div>
            <!-- Row End -->
         </div>
         <!-- Main Container End -->
      </section>
      
      <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Including Footer =-=-=-=-=-=-= -->
      <?php
      require_once 'includes\footer.php';
      ?>
      <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
   </div>
   <!-- Main Content Area End --> 
   <!-- Forget Password -->
   <div class="custom-modal">
      <div id="myModal" class="modal fade" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header rte">
                  <h2 class="modal-title">Forgot Your Password ?</h2>
               </div>
               <form>
                  <div class="modal-body">
                     <div class="form-group">
                        <label>Email</label>
                        <input placeholder="Enter Your Email Adress" class="form-control" type="email">
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default">Reset My Account</button>
                     <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
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
</body>
</html>

