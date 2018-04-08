<!DOCTYPE html>
<html lang="en">
<head>
   <!-- =-=-=-=-=-=-= Including Header =-=-=-=-=-=-= -->
   <?php
   require_once 'includes\header.php';
   is_logged_in_admin();
   $user = get_current_user_info();
   $myads = get_total_book_ads_provided_by_user_email($user['email']);
   $favourite_ads = get_total_favourite_ads_by_user_email($user['email']);
   update_user_from_profile();
   // echo $user['name'];
   ?>
   <!-- =-=-=-=-=-=-= Header  Complete=-=-=-=-=-=-= -->

</head>
<body>
   <!-- Small Breadcrumb -->
   <div class="small-breadcrumb">
      <div class="container">
         <div class=" breadcrumb-link">
            <ul>
               <li><a href="index.php">Home</a></li>
               <li><a class="active" href="#">Profile</a></li>
            </ul>
         </div>
      </div>
   </div>
   <!-- Small Breadcrumb -->
   <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
   <div class="main-content-area clearfix">
      <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
      <section class="section-padding gray">
         <!-- Main Container -->
         <div class="container">
            <!-- Row -->
            <div class="row">
               <!-- Middle Content Area -->
               <div class="col-md-4 col-sm-12 col-xs-12 leftbar-stick blog-sidebar">
                  <!-- Sidebar Widgets -->
                  <div class="user-profile">
                     <a href="profile.php"><img src="<?= $user['image']; ?>" alt=""></a>
                     <div class="profile-detail">
                        <h6><?= $user['name']; ?></h6>
                        <ul class="contact-details">
                           <li>
                              <i class="fa fa-map-marker"></i> <?= $user['address']; ?>
                           </li>
                           <li>
                              <i class="fa fa-envelope"></i><?= $user['email']; ?>
                           </li>
                           <li>
                              <i class="fa fa-phone"></i> <?= $user['contact_number']; ?>
                           </li>
                        </ul>
                     </div>
                     <ul>
                        <li  class="active"><a href="profile.php">Profile</a></li>
                        <li ><a href="active-ads.php">My Ads <span class="badge"><?= $myads; ?></span></a></li>
                        <li><a href="favourite.php">Favourites Ads <span class="badge"><?= $favourite_ads; ?></span></a></li>
                        <li ><a href="messages.php">Messages</a></li>
                        <li onclick="deleteAllCookies()"><a href="logout.php">Log Out</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-8 col-sm-12 col-xs-12">
                  <!-- Row -->
                  <div class="profile-section margin-bottom-20">
                     <div class="profile-tabs">
                        <ul class="nav nav-justified nav-tabs">
                           <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                           <li><a href="#edit" data-toggle="tab">Edit Profile</a></li>
                           <li><a href="#payment" data-toggle="tab">Change Password</a></li>
                           <!-- <li><a href="#settings" data-toggle="tab">Notification Settings</a></li> -->
                        </ul>
                        <div class="tab-content">
                           <div class="profile-edit tab-pane fade in active" id="profile">
                              <!-- <h2 class="heading-md">Manage your Name, ID and Email Addresses.</h2> -->
                              <!-- <p>Below are the name and email addresses on file for your account.</p> -->
                              <dl class="dl-horizontal">
                                 <dt><strong>Your name </strong></dt>
                                 <dd>
                                    <?php echo $user['name']; ?>
                                 </dd>
                                 <dt><strong>Email Address </strong></dt>
                                 <dd>
                                    <?= $user['email']; ?>
                                 </dd>
                                 <dt><strong>Mobile Number </strong></dt>
                                 <dd>
                                    0<?= $user['contact_number']; ?>
                                 </dd>
                                 <dt><strong>Country </strong></dt>
                                 <dd>
                                    <?= $user['country']; ?>
                                 </dd>
                                 <dt><strong>City </strong></dt>
                                 <dd>
                                    <?= $user['city']; ?>
                                 </dd>
                                 <dt><strong>Address </strong></dt>
                                 <dd>
                                    <?= $user['address']; ?>
                                 </dd>
                              </dl>
                           </div>
                           <div class="profile-edit tab-pane fade" id="edit">
                              <!-- <h2 class="heading-md">Manage your Security Settings</h2> -->
                              <!-- <p>Manage Your Account</p> -->
                              <div class="clearfix"></div>
                              <form action="" method="post" class="submit-form" enctype="multipart/form-data">
                                 <div class="row">
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                       <label>Your Name </label>
                                       <input name="name" type="text" class="form-control margin-bottom-20" value="<?= $user['name']; ?>" required>
                                    </div>
                                    <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                                       <label>Email Address <span class="color-red">*</span></label>
                                       <input type="text" class="form-control margin-bottom-20">
                                    </div> -->
                                    <div class="col-md-12 col-sm-12 col-xs-12">  
                                       <label>Contact Number <span class="color-red">*</span></label>
                                       <input name="contact_number" type="text" class="form-control margin-bottom-20" value="0<?= $user['contact_number']; ?>" required>
                                    </div>
                                    
                                    <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-20">
                                       <label>City <span class="color-red">*</span></label>
                                       <select name="city" class="form-control" required>
                                          <option value="Dhaka">Dhaka</option>
                                          <option value="Rangpur">Rangpur</option>
                                          <option value="Chadpur">Chadpur</option>
                                          <option value="Madaripur">Madaripur</option>
                                          <option value="Barisal">Barisal</option>
                                          <option value="Khulna">Khulna</option>
                                       </select>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Address <span class="color-red">*</span></label>
                                       <textarea name="address" class = "form-control margin-bottom-20" rows = "3" required > <?= $user['address']; ?></textarea>
                                    </div>
                                 </div>
                                 <div class="row margin-bottom-20">
                                    <div class="form-group">
                                       <div class="col-md-9">
                                          <div class="input-group">
                                             <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                   Browse… <input name="file" type="file" id="imgInp" required>
                                                </span>
                                             </span>
                                             <input type="text" class="form-control" readonly>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <img id="img-upload" style="align-content: center;" class="img-responsive" src="images/users/2.jpg" alt="" />
                                       </div>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="row">
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                       <div class="form-group">
                                          <div class="skin-minimal">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                       <button type="submit" name="publish" value="Publish" class="btn btn-theme btn-sm">Update My Info</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div class="profile-edit tab-pane fade" id="payment">
                              <form action="#" id="sky-form" class="sky-form" novalidate>

                                 <div class="col-md-12 col-sm-6 col-xs-12">
                                    <label>Current Password </label>
                                    <input type="password" class="form-control margin-bottom-20">
                                 </div>
                                 <div class="col-md-12 col-sm-6 col-xs-12">
                                    <label>New Password </label>
                                    <input type="password" class="form-control margin-bottom-20">
                                 </div>
                                 <div class="col-md-12 col-sm-6 col-xs-12">
                                    <label>Enter New Password Again </label>
                                    <input type="password" class="form-control margin-bottom-20">
                                 </div>
                                 <button class="btn btn-sm btn-default" type="button">Cancel</button>
                                 <button type="submit" class="btn btn-sm btn-theme">Save Changes</button>
                                 <!--End Checkout-Form-->
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Row End -->
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
   <!-- Back To Top -->
   <a href="#0" class="cd-top">Top</a>
   <!-- Back To Top -->

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

