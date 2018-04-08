

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
               <li><a href="profile.php">Profile</a></li>
               <li><a class="active" href="#">Favourits Ads</a></li>
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
                        <h6><?php echo $user['name']; ?></h6>
                        <ul class="contact-details">
                           <li>
                              <i class="fa fa-map-marker"></i> <?php echo $user['address']; ?>
                           </li>
                           <li>
                              <i class="fa fa-envelope"></i><?php echo $user['email']; ?>
                           </li>
                           <li>
                              <i class="fa fa-phone"></i> <?php echo $user['contact_number']; ?>
                           </li>
                        </ul>
                     </div>
                     <ul>
                        <li ><a href="profile.php">Profile</a></li>
                        <li ><a href="active-ads.php">My Ads <span class="badge"><?= $myads ?></span></a></li>
                        <li  class="active"><a href="favourite.php">Favourites Ads <span class="badge"><?= $favourite_ads ?></span></a></li>
                        <li ><a href="messages.php">Messages</a></li>
                        <li><a href="#">Logout</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-8 col-sm-12 col-xs-12">
                  <!-- Row --
                  <div class="row">
                     <!-- Sorting Filters -->
                     <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 heading">
                        <!-- Advertisement Panel -->
                        <div class="panel panel-default">
                           <div class="panel-heading" >
                              <div class="col-md-4 col-sm-4 col-xs-4">
                                 <h4 class="panel-title">
                                    <a>
                                       My Favourite Ads
                                    </a>
                                 </h4>
                              </div>
                              <div class="col-md-8 col-sm-4 col-xs-4">
                                 <div class="search-widget pull-right">
                                    <input placeholder="search" type="text">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Advertisement Panel End -->
                     </div>
                     <!-- Sorting Filters End-->
                     <div class="clearfix"></div>
                     <!-- Ads Archive -->
                     <div class="posts-masonry">
                        <div class="col-md-12 col-xs-12 col-sm-12 user-archives">
                           <!-- Ads Listing -->
                           <?php get_all_favourite_adds_user_email($user['email']) ?>
                           <!-- Ads Listing -->
                        </div>
                     </div>
                     <!-- Ads Archive End -->  
                     <div class="clearfix"></div>
                     <!-- Pagination -->  
                     <div class="col-md-12 col-xs-12 col-sm-12">
                        <ul class="pagination pagination-lg">
                           <li> <a href="#"> <i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                           <li> <a href="#">1</a> </li>
                           <li class="active"> <a href="#">2</a> </li>
                           <li> <a href="#">3</a> </li>
                           <li> <a href="#">4</a> </li>
                           <li><a href="#"> <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                     <!-- Pagination End -->   
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

   <script type="text/javascript">
      
      function deleteFromFavourite(adno){
         // alert(adno);
         var data = {"adno": adno};
         jQuery.ajax({
           url: "delete-ads-from-favourites.php",
           type:'POST',
           data: data,
           success:function(data){
            // alert(data);
         // document.getElementById("list-of-book").innerHTML = data;
         // $("#list-of-book").html(response);
         location.reload();
         // document.getElementById("favourite").innerHTML = data;
      },
      error: function(){
         alert("Something wrong");
      }
   });
      }
   </script>
</body>
</html>

