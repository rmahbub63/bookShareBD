<!DOCTYPE html>
<html lang="en">
<head>
   <?php
   require_once 'includes/header.php';
   is_logged_in_admin();
   $category = $_GET['category'];
   $sub_category = $_GET['sub'];
   ?>
</head>
<body>
   <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
   <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
   <div class="page-header-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
               <div class="header-page">
                  <h1><?= $category ?></h1>
                  <span><?= $sub_category ?></span>
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
               <li><a href="index.php">Home</a></li>
               <li><a href="#">Category</a></li>
               <li><a class="active" href="#">Sub Category</a></li>
            </ul>
         </div>
      </div>
   </div>
   <!-- Small Breadcrumb -->
   <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
   <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
   <div class="main-content-area clearfix">
      <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
      <section class="section-padding gray">
         <!-- Main Container -->
         <div class="container">
            <!-- Row -->
            <div class="row">
               <!-- Middle Content Area -->
               <div class="col-md-8 col-md-push-4 col-lg-8 col-sx-12">
                  <!-- Row -->
                  <div class="row">
                     <!-- Sorting Filters -->
                     <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 dark-listing">
                        <!-- Sorting Filters Breadcrumb -->
                        <div class="filter-brudcrums">
                           <span>Showing <span class="showed">1 - 20</span> of <span class="showed">42211</span> results</span>
                           <div class="filter-brudcrums-sort">
                              <!-- Style Switcher -->
                              <div class="switcher pull-right">
                                 <a href="#" id="list" class="btn btn-theme">
                                    <i class="fa fa-list"></i>
                                    List
                                 </a> 
                                 <a href="#" id="grid" class="btn active btn-theme">
                                    <i class="fa fa-th"></i>
                                    Grid
                                 </a>
                              </div>
                              <!-- Style Switcher End -->
                           </div>
                        </div>sub 
                        <!-- Sorting Filters Breadcrumb End -->
                     </div>
                     <!-- Sorting Filters End-->
                     <div class="clearfix"></div>
                     <!-- Ads Archive -->
                     <div class="col-md-12 col-xs-12 col-sm-12">
                        <div id="products" class=" mid-container list-group">
                           <div class="row">
                              <!-- Listing Ad Grid -->
                              <?php get_all_books_by_category_and_subcategory($category,$sub_category); ?>
                              <!-- Listing Ad Grid -->
                           </div>
                        </div>
                     </div>
                     <!-- Ads Archive End --> 
                     <div class="clearfix"></div>
                     <!-- Advertizing -->
                     <div class="col-md-12 col-xs-12 col-sm-12">
                        <section class="advertising">
                           <a href="postad.php">
                              <div class="banner">
                                 <div class="wrapper">
                                    <span class="title">Do you want your book to be listed here?</span>
                                    <span class="submit">Submit it now! <i class="fa fa-plus-square"></i></span>
                                 </div>
                              </div>
                              <!-- /.banner-->
                           </a>
                        </section>
                     </div>
                     <!-- Advertizing End -->
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
               <!-- Left Sidebar -->
               <div class="col-md-4 col-md-pull-8 col-sx-12">
                  <!-- Sidebar Widgets -->
                  <div class="sidebar">
                     <!-- Panel group -->
                     <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- Brands Panel -->    
                        <div class="panel panel-default">
                           <!-- Heading -->
                           <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                 <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Sub Categories
                                 </a>
                              </h4>
                           </div>
                           <!-- Content -->
                           <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                 <!-- Search -->
                                 <!-- <div class="search-widget">
                                    <input placeholder="search" type="text">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                 </div> -->
                                 <!-- Brands List -->                              
                                 <div class="skin-minimal">
                                    <ul class="list">
                                       <?php show_all_subcategory_in_category_listing_by_category($category);?>
                                    </ul>
                                 </div>
                                 <!-- Brands List End -->                 
                              </div>
                           </div>
                        </div>
                        <!-- Brands Panel End -->
                        <!-- Condition Panel -->    
                        <div class="panel panel-default">
                           <!-- Heading -->
                           <div class="panel-heading" role="tab" id="headingThree">
                              <h4 class="panel-title">
                                 <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Condition
                                 </a>
                              </h4>
                           </div>
                           <!-- Content -->
                           <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body">
                                 <div class="skin-minimal">
                                    <ul class="list">
                                       <li>
                                          <input tabindex="7" type="radio" id="minimal-radio-1" name="minimal-radio">
                                          <label for="minimal-radio-1">New</label>
                                       </li>
                                       <li>
                                          <input tabindex="7" type="radio" id="minimal-radio-1" name="minimal-radio">
                                          <label for="minimal-radio-1">Fair</label>
                                       </li>
                                       <li>
                                          <input tabindex="8" type="radio" id="minimal-radio-2" name="minimal-radio" checked>
                                          <label for="minimal-radio-2">Used</label>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Condition Panel End -->   
                        <!-- Pricing Panel -->
                        
                        <!-- Pricing Panel End -->
                        <!-- Featured Ads Panel -->
                        
                        <!-- Featured Ads Panel End -->
                        <!-- Latest Ads Panel -->
                        <div class="panel panel-default">
                           <!-- Heading -->
                           <div class="panel-heading" >
                              <h4 class="panel-title">
                                 <a>
                                    Recent Ads
                                 </a>
                              </h4>
                           </div>
                           <!-- Content -->
                           <div class="panel-collapse">
                              <div class="panel-body recent-ads">
                                 <!-- Ads -->
                                 <div class="recent-ads-list">
                                    <div class="recent-ads-container">
                                       <div class="recent-ads-list-image">
                                          <a href="#" class="recent-ads-list-image-inner">
                                             <img src="images/posting/thumb-1.jpg" alt="">
                                          </a><!-- /.recent-ads-list-image-inner -->
                                       </div>
                                       <!-- /.recent-ads-list-image -->
                                       <div class="recent-ads-list-content">
                                          <h3 class="recent-ads-list-title">
                                             <a href="#">Sony Xperia Z1</a>
                                          </h3>
                                          <ul class="recent-ads-list-location">
                                             <li><a href="#">New York</a>,</li>
                                             <li><a href="#">Brooklyn</a></li>
                                          </ul>
                                          <div class="recent-ads-list-price">
                                             $ 17,000
                                          </div>
                                          <!-- /.recent-ads-list-price -->
                                       </div>
                                       <!-- /.recent-ads-list-content -->
                                    </div>
                                    <!-- /.recent-ads-container -->
                                 </div>
                                 <!-- Ads -->
                                 <div class="recent-ads-list">
                                    <div class="recent-ads-container">
                                       <div class="recent-ads-list-image">
                                          <a href="#" class="recent-ads-list-image-inner">
                                             <img src="images/posting/thumb-2.jpg" alt="">
                                          </a><!-- /.recent-ads-list-image-inner -->
                                       </div>
                                       <!-- /.recent-ads-list-image -->
                                       <div class="recent-ads-list-content">
                                          <h3 class="recent-ads-list-title">
                                             <a href="#">2017 BMW i8</a>
                                          </h3>
                                          <ul class="recent-ads-list-location">
                                             <li><a href="#">New York</a>,</li>
                                             <li><a href="#">Brooklyn</a></li>
                                          </ul>
                                          <div class="recent-ads-list-price">
                                             $ 66,000
                                          </div>
                                          <!-- /.recent-ads-list-price -->
                                       </div>
                                       <!-- /.recent-ads-list-content -->
                                    </div>
                                    <!-- /.recent-ads-container -->
                                 </div>
                                 <!-- Ads -->
                                 <div class="recent-ads-list">
                                    <div class="recent-ads-container">
                                       <div class="recent-ads-list-image">
                                          <a href="#" class="recent-ads-list-image-inner">
                                             <img src="images/posting/thumb-3.jpg" alt="">
                                          </a><!-- /.recent-ads-list-image-inner -->
                                       </div>
                                       <!-- /.recent-ads-list-image -->
                                       <div class="recent-ads-list-content">
                                          <h3 class="recent-ads-list-title">
                                             <a href="#">Dell Latitude e7440</a>
                                          </h3>
                                          <ul class="recent-ads-list-location">
                                             <li><a href="#">New York</a>,</li>
                                             <li><a href="#">Brooklyn</a></li>
                                          </ul>
                                          <div class="recent-ads-list-price">
                                             $ 37,000
                                          </div>
                                          <!-- /.recent-ads-list-price -->
                                       </div>
                                       <!-- /.recent-ads-list-content -->
                                    </div>
                                    <!-- /.recent-ads-container -->
                                 </div>
                                 <!-- Ads -->
                                 <div class="recent-ads-list">
                                    <div class="recent-ads-container">
                                       <div class="recent-ads-list-image">
                                          <a href="#" class="recent-ads-list-image-inner">
                                             <img src="images/posting/thumb-4.jpg" alt="">
                                          </a><!-- /.recent-ads-list-image-inner -->
                                       </div>
                                       <!-- /.recent-ads-list-image -->
                                       <div class="recent-ads-list-content">
                                          <h3 class="recent-ads-list-title">
                                             <a href="#">Sport Stylish Steering</a>
                                          </h3>
                                          <ul class="recent-ads-list-location">
                                             <li><a href="#">New York</a>,</li>
                                             <li><a href="#">Brooklyn</a></li>
                                          </ul>
                                          <div class="recent-ads-list-price">
                                             $ 11,000
                                          </div>
                                          <!-- /.recent-ads-list-price -->
                                       </div>
                                       <!-- /.recent-ads-list-content -->
                                    </div>
                                    <!-- /.recent-ads-container -->
                                 </div>
                                 <!-- Ads -->
                                 <div class="recent-ads-list">
                                    <div class="recent-ads-container">
                                       <div class="recent-ads-list-image">
                                          <a href="#" class="recent-ads-list-image-inner">
                                             <img src="images/posting/thumb-5.jpg" alt="">
                                          </a><!-- /.recent-ads-list-image-inner -->
                                       </div>
                                       <!-- /.recent-ads-list-image -->
                                       <div class="recent-ads-list-content">
                                          <h3 class="recent-ads-list-title">
                                             <a href="#">Apple Wrist Watches</a>
                                          </h3>
                                          <ul class="recent-ads-list-location">
                                             <li><a href="#">New York</a>,</li>
                                             <li><a href="#">Brooklyn</a></li>
                                          </ul>
                                          <div class="recent-ads-list-price">
                                             $ 20,000
                                          </div>
                                          <!-- /.recent-ads-list-price -->
                                       </div>
                                       <!-- /.recent-ads-list-content -->
                                    </div>
                                    <!-- /.recent-ads-container -->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Latest Ads Panel End -->
                     </div>
                     <!-- panel-group end -->
                  </div>
                  <!-- Sidebar Widgets End -->
               </div>
               <!-- Left Sidebar End -->
            </div>
            <!-- Row End -->
         </div>
         <!-- Main Container End -->
      </section>
      <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
      <?php
      require_once 'includes/footer.php';
      ?>
      <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
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
   <script>
      jQuery(function(){
         jQuery('#list').click();
      });
   </script>
</body>
</html>

