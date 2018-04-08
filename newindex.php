<!DOCTYPE html>
<html lang="en">
<head>
   <?php
   require_once 'includes/header.php';
   is_logged_in();
   echo display_message();
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
                     <select class="category form-control">
                        <option label="Select a category"></option>
                        <option value="0" selected="true">All</option>
                        <option value="1">Mobile Phones</option>
                        <option value="2">Home Appliances</option>
                        <option value="3">Clothing</option>
                        <option value="4">Human Resource</option>
                        <option value="5">Information Technology</option>
                        <option value="6">Marketing</option>
                        <option value="7">Others</option>
                        <option value="8">Sales</option>
                     </select>
                  </div>
                  <!-- Search Field -->
                  <div class="col-md-6 col-xs-12 col-sm-4 no-padding">
                     <input type="text" class="form-control" placeholder="What Are You Looking For..." />
                  </div>
                  <!-- Search Button -->
                  <div class="col-md-3 col-xs-12 col-sm-4 no-padding">
                     <button type="submit" class="btn btn-block btn-light">Search</button>
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
   <div class="main-content-area clearfix">
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
                           <span>Showing <span class="showed">1 - 20</span> of <span class="showed">42211</span> results</span>
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
                           <ul class="list-unstyled">
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
      <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
      <footer class="footer-area">
         <!--Footer Upper-->
         <div class="footer-content">
            <div class="container">
               <div class="row ">
                  <!--Two 4th column-->
                  <div class="col-md-6 col-sm-12 col-xs-12">
                     <div class="row clearfix">
                        <div class="col-lg-7 col-sm-6 col-xs-12 column">
                           <div class="footer-widget about-widget">
                              <div class="logo">
                                 <a href="index.html"><img alt="" class="img-responsive" src="images/logo-1.png"></a>
                              </div>
                              <div class="text">
                                 <p>Lorem ipsum dolor sit amet, eu me.</p>
                              </div>
                              <ul class="contact-info">
                                 <li><span class="icon fa fa-map-marker"></span> 60 Link Road Lhr. Pakistan 54770</li>
                                 <li><span class="icon fa fa-phone"></span> (042) 1234567890</li>
                                 <li><span class="icon fa fa-envelope-o"></span> contant@scriptsbundle.com</li>
                                 <li><span class="icon fa fa-fax"></span> (042) 1234 7777</li>
                              </ul>
                              <div class="social-links-two clearfix"> 
                                 <a class="facebook img-circle" href="#"><span class="fa fa-facebook-f"></span></a>
                                 <a class="twitter img-circle" href="#"><span class="fa fa-twitter"></span></a>
                                 <a class="google-plus img-circle" href="#"><span class="fa fa-google-plus"></span></a>
                                 <a class="linkedin img-circle" href="#"><span class="fa fa-pinterest-p"></span></a>
                                 <a class="linkedin img-circle" href="#"><span class="fa fa-linkedin"></span></a> 
                              </div>
                           </div>
                        </div>
                        <!--Footer Column-->
                        <div class="col-lg-5 col-sm-6 col-xs-12 column">
                           <div class="heading-panel">
                              <h3 class="main-title text-left">Our Services</h3>
                           </div>
                           <div class="footer-widget links-widget">
                              <ul>
                                 <li><a href="#">Web Development</a></li>
                                 <li><a href="#">Web Designing</a></li>
                                 <li><a href="#">Android Development</a></li>
                                 <li><a href="#">Theme Development</a></li>
                                 <li><a href="#">IOS Development</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--Two 4th column End-->
                  <!--Two 4th column-->
                  <div class="col-md-6 col-sm-12 col-xs-12">
                     <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="col-lg-7 col-sm-6 col-xs-12 column">
                           <div class="footer-widget news-widget">
                              <div class="heading-panel">
                                 <h3 class="main-title text-left"> Latest News</h3>
                              </div>
                              <!--News Post-->
                              <div class="news-post">
                                 <div class="icon"></div>
                                 <div class="news-content">
                                    <figure class="image-thumb"><img alt="" src="images/blog/popular-2.jpg"></figure>
                                    <a href="#">If you need a crown or lorem an implant you will pay it gap it</a>
                                 </div>
                                 <div class="time">July 2, 2014</div>
                              </div>
                              <!--News Post-->
                              <div class="news-post">
                                 <div class="icon"></div>
                                 <div class="news-content">
                                    <figure class="image-thumb"><img alt="" src="images/blog/popular-1.jpg"></figure>
                                    <a href="#">If you need a crown or lorem an implant you will pay it gap it</a>
                                 </div>
                                 <div class="time">July 2, 2014</div>
                              </div>
                           </div>
                        </div>
                        <!--Footer Column-->
                        <div class="col-lg-5 col-sm-6 col-xs-12 column">
                           <div class="footer-widget links-widget">
                              <div class="heading-panel">
                                 <h3 class="main-title text-left"> Quick Links</h3>
                              </div>
                              <ul>
                                 <li><a href="about.html">About Us</a></li>
                                 <li><a href="#">Our Team</a></li>
                                 <li><a href="#">Our Services</a></li>
                                 <li><a href="index-7.html">One Page</a></li>
                                 <li><a href="contact.html">Contact Us</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--Two 4th column End-->
               </div>
            </div>
         </div>
         <!--Footer Bottom-->
         <div class="footer-copyright">
            <div class="container clearfix">
               <!--Copyright-->
               <div class="copyright text-center">Copyright 2017 © Theme Created By <a href="http://themeforest.net/user/scriptsbundle/portfolio" target="_blank">Scriptsbundle</a> All Rights Reserved</div>
            </div>
         </div>
      </footer>
      <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
   </div>
   <!-- Main Content Area End --> 
   <!-- Post Ad Sticky -->
   <a href="#" class="sticky-post-button hidden-xs">
      <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
      </span>
      <h4>SELL</h4>
   </a>
   <!-- Back To Top -->
   <a href="#0" class="cd-top">Top</a>
   <!-- Product Preview Popup -->
   <div class="quick-view-modal modalopen" id="ad-preview" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg ad-modal">
         <button class="close close-btn popup-cls" aria-label="Close" data-dismiss="modal" type="button"> <i class="fa-times fa"></i> </button>
         <div class="modal-content single-product">
            <div class="diblock">
               <div class="col-lg-7 col-sm-12 col-xs-12">
                  <div class="clearfix"></div>
                  <div class="flexslider single-page-slider">
                     <div class="flex-viewport">
                        <ul class="slides slide-main">
                           <li class=""><img alt="" src="images/single-page/1.jpg" title=""></li>
                           <li><img alt="" src="images/single-page/2.jpg" title=""></li>
                           <li class="flex-active-slide"><img alt="" src="images/single-page/3.jpg" title=""></li>
                           <li><img alt="" src="images/single-page/4.jpg" title=""></li>
                           <li><img alt="" src="images/single-page/5.jpg" title=""></li>
                           <li><img alt="" src="images/single-page/6.jpg" title=""></li>
                        </ul>
                     </div>
                  </div>
                  <div class="flexslider" id="carousels">
                     <div class="flex-viewport">
                        <ul class="slides slide-thumbnail">
                           <li><img alt="" draggable="false" src="images/single-page/1_thumb.jpg"></li>
                           <li><img alt="" draggable="false" src="images/single-page/2_thumb.jpg"></li>
                           <li class="flex-active-slide"><img alt="" draggable="false" src="images/single-page/3_thumb.jpg"> </li>
                           <li><img alt="" draggable="false" src="images/single-page/4_thumb.jpg"></li>
                           <li><img alt="" draggable="false" src="images/single-page/5_thumb.jpg"></li>
                           <li><img alt="" draggable="false" src="images/single-page/6_thumb.jpg"></li>
                           <!-- items mirrored twice, total of 12 -->
                        </ul>
                     </div>
                  </div>
               </div>
               <div class=" col-sm-12 col-lg-5 col-xs-12">
                  <div class="summary entry-summary">
                     <div class="ad-preview-details">
                        <a href="#">
                           <h4>Honda Civic Sports Edition 2017</h4>
                        </a>
                        <div class="overview-price">
                           <span>$36.000</span>
                        </div>
                        <div class="clearfix"></div>
                        <p>Tattooed fashion axe Blue Bottle butcher tilde. Pitchfork leggings meh Odd Future.Drinking vinegar. </p>
                        <ul class="ad-preview-info col-md-6 col-sm-6">
                           <li>
                              <span>Fabrication:</span>
                              <p>2013/2014</p>
                           </li>
                           <li>
                              <span>Speed:</span>
                              <p>160p/h</p>
                           </li>
                           <li>
                              <span>Mileage:</span>
                              <p>30.000km - 40.000km</p>
                           </li>
                           <li>
                              <span>Fuel:</span>
                              <p>Petrol</p>
                           </li>
                        </ul>
                        <ul class="ad-preview-info col-md-6 col-sm-6">
                           <li>
                              <span>Color:</span>
                              <p>Black</p>
                           </li>
                           <li>
                              <span>Transmition:</span>
                              <p>Automatic</p>
                           </li>
                           <li>
                              <span>Dors:</span>
                              <p>4/5</p>
                           </li>
                           <li>
                              <span>Engine:</span>
                              <p>2500cm3</p>
                           </li>
                        </ul>
                        <button class="btn btn-theme btn-block" type="submit">Contact Dealer</button>
                     </div>
                  </div>
                  <!-- .summary -->
               </div>
            </div>
         </div>
      </div>
   </div>
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
</body>
</html>

