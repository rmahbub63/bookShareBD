<!DOCTYPE html>
<html lang="en">
<head>
   <?php
   require_once 'includes/header.php';
   is_logged_in_admin();
   // echo current_user_email();
   ?>
</head>
<body>
   <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
   <section class="breadcrumb-1 small-hero">
      <div class="bg-overlay">
         <div class="container">
            <!-- Main Content -->
            <div class="content-section">
               <!-- Title -->
               <h1>HIRE <b>|</b> BUY <b>|</b> SELL <b> | </b> RENT Your Books</h1>
               <h2>Search in the largest marketplace of books</h2>
            </div>
            <!-- Main Content End -->
         </div>
      </div>
   </section>
   <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
   <!-- =-=-=-=-=-=-= Advance Search =-=-=-=-=-=-= -->
   <div id="search-section">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-12">
               <!-- Form -->
               <form method="post" class="search-form">
                  <div class="col-md-3 col-xs-12 col-sm-4 no-padding">
                     <select id="categoryOption" class="category form-control">
                        <option label="Select a category"></option>
                        <?php show_categories_in_home_page(); ?>
                     </select>
                  </div>
                  <!-- Search Field -->
                  <div class="col-md-6 col-xs-12 col-sm-4 no-padding">
                     <input id="search_key" type="text" class="form-control" placeholder="What Are You Looking For..." />
                  </div>
                  <!-- Search Button -->
                  <div class="col-md-3 col-xs-12 col-sm-4 no-padding">
                     <button type="button" onclick="functionforSearch()" class="btn btn-block btn-light">Search</button>
                  </div>
               </form>
               <!-- end .search-form -->
            </div>
         </div>
      </div>
   </div>
   <!-- =-=-=-=-=-=-= Advance Search End  =-=-=-=-=-=-= -->
   <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
   <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
   <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
   <section class="section-padding pattern_dots">
      <!-- Main Container -->
      <div class="container">
         <!-- Row -->
         <div class="row">
            <!-- Middle Content Area -->
            <div class="col-md-12 col-lg-12 col-sx-12">
               <!-- Row -->
               <div class="row">
                  <!-- Sorting Filters -->
                  <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                     <!-- Sorting Filters Breadcrumb -->
                     <div class="filter-brudcrums">
                        <div class="filter-brudcrums-sort">
                           <ul>
                              <li><span>Sort by:</span></li>
                              <li><a href="#">Updated date</a></li>
                              <li><a href="#">Price</a></li>
                              <li><a href="#">New</a></li>
                              <li><a href="#">Used</a></li>
                              <li><a href="#">Warranty</a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- Sorting Filters Breadcrumb End -->
                  </div>
                  <!-- Sorting Filters End-->
                  <div class="clearfix"></div>
                  <!-- Ads Archive -->
                  <div class="posts-masonry">
                     <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                        <ul id="list-of-book" class="list-unstyled">
                           <!-- Listing Grid -->
                           <?php get_all_books(); ?>
                        </ul>
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
   <div class="main-content-area clearfix">
      <!-- =-=-=-=-=-=-= Popular Categories =-=-=-=-=-=-= -->
      <section class="custom-padding gray">
         <!-- Main Container -->

         <!-- =-=-=-=-=-=-= How It Work =-=-=-=-=-=-= -->
         <section class="section-padding white">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <!-- Main Title -->
                        <h1>How It <span class="heading-color"> Work</span></h1>
                        <!-- Short Description -->
                        <p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu, his dico ut debet consectetuer.</p>
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="col-xs-12 col-md-12 col-sm-12 ">
                     <div class="row">
                        <div class="how-it-work text-center">
                           <div class="how-it-work-icon"> <i class="flaticon-people"></i> </div>
                           <h4>Create Your Account</h4>
                           <p>Duis posuere nec libero efficitur maecenas ut aliquam augue dapibus elit nullam eleifend odio aliquam gravida mauris.</p>
                        </div>
                        <div class="how-it-work text-center ">
                           <div class="how-it-work-icon"> <i class="flaticon-people-2"></i> </div>
                           <h4>Post Free Ad</h4>
                           <p>Duis posuere nec libero efficitur maecenas ut aliquam augue dapibus elit nullam eleifend odio aliquam gravida mauris.</p>
                        </div>
                        <div class="how-it-work text-center">
                           <div class="how-it-work-icon "> <i class="flaticon-heart-1"></i> </div>
                           <h4>Deal Done</h4>
                           <p>Duis posuere nec libero efficitur maecenas ut aliquam augue dapibus elit nullam eleifend odio aliquam gravida mauris.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Middle Content Box End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= How It Work End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Parallex Section =-=-=-=-=-=-= -->
         <section class="section-padding-140 parallex  bg-img-5" data-stellar-background-ratio="0.1">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <div class="col-xs-12 col-md-6 col-sm-12">
                     <a href="#">
                        <div class="icon-box yellow">
                           <div class="icon"> <i class="flaticon-transport-9"></i> </div>
                           <div class="icon-text">
                              <h3 class="title">
                                 Are You looking for something?            
                              </h3>
                              <div class="content">
                                 <p><span>Our cars are delivered fully-registered with all requirements completed. We’ll deliver your car wherever you are.</span></p>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-xs-12 col-md-6 col-sm-12">
                     <a href="#">
                        <div class="icon-box red">
                           <div class="icon"> <i class="flaticon-cogwheel-1"></i> </div>
                           <div class="icon-text">
                              <h3 class="title">
                                 Do You want to sell something?            
                              </h3>
                              <div class="content">
                                 <p><span>What’s your car worth? Receive the absolute best value for your trade-in vehicle. We even handle all paperwork.</span></p>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Parallex Section End =-=-=-=-=-=-= -->     
      </div>
      <!-- Main Content Area End --> 
      <!-- Post Ad Sticky -->
      <!-- <a href="#" class="sticky-post-button">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
         <h4>SELL</h4>
      </a> -->
      <!-- Back To Top -->
      <a href="#0" class="cd-top">Top</a>
      <!-- Product Preview Popup -->
      <!-- / Product Preview Popup -->
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

      <!-- My Custom JS -->
      <script src="js/myscripts.js"></script>

      <?php
      require_once 'includes/footer.php';
      ?>
   </body>
   </html>

