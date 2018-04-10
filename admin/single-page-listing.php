<!DOCTYPE html>
<html lang="en">
<head>
   <!-- =-=-=-=-=-=-= Including Header =-=-=-=-=-=-= -->
   <?php
   require_once 'includes\header.php';
   is_logged_in_admin();
   $adno = $_GET['adno'];
   $adno = (int)$adno;
   // echo $adno;

   $book = get_book_info_by_adno($adno);

   $mobile_first_part = "";
   $mobile_last_part = "";
   $mobile = $book['mobile'];
   if (strlen($mobile) == 10) {
    // truncate string
     $mobile_first_part = substr($mobile, 0, 5);
     // echo $mobile_first_part;
     $mobile_last_part = substr($mobile,6,11);
     // echo $mobile_last_part;
    //if the string doesn't contain any space then it will cut without word basis.
     $mobile = $mobile_last_part? substr($mobile_first_part, 0, $mobile_last_part):substr($mobile_first_part, 0);
  }

  if(!strcasecmp($book['adtype'],"Rent")){
   $price = $book['rent_price'];
   $rent_type = $book['rent_type'];
   $security_money = $book['security_money'];
   $orginal_price = $book['orginal_price'];
   $extra = '/';
} else{
   $price = $book['selling_price'];
   $rent_type = '';
   $security_money = 'N/A';
   $orginal_price = 'N/A';
   $extra = '';
}
   // $user = get_current_user_info();

   // echo $user['name'];
?>
<!-- =-=-=-=-=-=-= Header  Complete=-=-=-=-=-=-= -->
</head>
<body>

   <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
   <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
   <div class="page-header-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
               <div class="header-page">
                  <h1><?php echo $book['title']; ?></h1>
                  <span><?php echo $book['author']; ?></span>
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
               <li><a class="active" href="#">Ad Detail</a></li>
            </ul>
         </div>
      </div>
   </div>
   <!-- Small Breadcrumb -->
   <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
   <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
   <div class="main-content-area clearfix">
      <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
      <section class="section-padding error-page pattern-bgs gray ">
         <!-- Main Container -->
         <div class="container">
            <!-- Row -->
            <div class="row">
               <!-- Middle Content Area -->
               <div class="col-md-8 col-xs-12 col-sm-12">
                  <!-- Single Ad -->
                  <div class="single-ad">
                     <!-- Title -->
                     <div class="ad-box">
                        <h1><?php echo $book['title']; ?></h1>
                        <h4><?php echo $book['author']; ?></h4>

                        <div class="short-history">
                           <ul>
                              <li>Published on: <b><?php echo $book['postedon']; ?></b></li> 
                              <li>Category: <b><?php echo $book['category']; ?></b></li> 
                              <li>Location: <b><?php echo $book['address']; ?></b></li>
                           </ul>
                        </div>
                     </div>
                     <!-- Listing Slider  --> 
                     <div class="flexslider single-page-slider">
                        <div class="flex-viewport">
                           <ul class="slides slide-main">
                              <li class=""><img alt="images/single-page/1.jpg" src="<?php echo $book['ad_image']; ?>" title=""></li>
                              
                           </ul>
                        </div>
                     </div>
                     <!-- Listing Slider Thumb --> 
                     <!-- Share Ad  --> 
                     <div class="ad-share text-center">
                        <!-- <div data-toggle="modal" data-target=".share-ad" class="ad-box col-md-4 col-sm-4 col-xs-12"> -->
                           <div data-toggle="modal" data-target="" class="ad-box col-md-4 col-sm-4 col-xs-12">
                              <i class="fa fa-share-alt"></i> <span class="hidetext">Share</span>
                           </div>
                           <a id="favourite" class="ad-box col-md-4 col-sm-4 col-xs-12" onclick="addToFavourite(<?= $adno ?>)"><i class="fa fa-star active"></i> <span class="hidetext">Add to Favourites</span></a>
                           <div data-target=".report-quote" data-toggle="modal" class="ad-box col-md-4 col-sm-4 col-xs-12">
                              <i class="fa fa-warning"></i> <span class="hidetext">Report</span>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Short Description  --> 
                        <div class="ad-box">
                           <div class="short-features">
                              <!-- Heading Area -->
                              <div class="heading-panel">
                                 <h3 class="main-title text-left">
                                  <u> Description</u> : 
                               </h3>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                              <span><strong>Type</strong> :</span> <?php echo $book['adtype']; ?>
                           </div>
                           <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                              <span><strong>Category</strong> :</span> <?php echo $book['category']; ?>
                           </div>
                           <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                              <span><strong>Sub Category</strong> :</span> <?php echo $book['sub_category']; ?>
                           </div>
                           <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                              <span><strong>Edition No</strong>:</span> <?php echo $book['edition_no']; ?>
                           </div>
                           <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                              <span><strong>Date</strong> :</span> <?php echo $book['postedon']; ?>
                           </div>
                           <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                              <span><strong>Condition</strong> :</span> <?php echo $book['book_condition']; ?>
                           </div>
                           <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                              <span><strong>Security Money</strong> :</span> <?php echo $security_money; ?>
                           </div>
                           <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                              <span><strong>Original Price</strong> :</span> <?php echo $orginal_price; ?>
                           </div>
                        </div>
                        <!-- Short Features  --> 

                        <!-- Related Image  --> 
                        <!-- Ad Specifications --> 
                        <div class="specification">
                           <!-- Heading Area -->
                           <div class="heading-panel">
                              <h3 class="main-title text-left">
                                 <u> Specifications</u> :  
                              </h3>
                           </div>
                           <?php echo $book['book_description']; ?>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <!-- Single Ad End --> 
                  <!-- Price Alert -->
                  <!-- Price Alert End --> 
                  <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
                  <div class="grid-panel margin-top-30">
                     <div class="heading-panel">
                        <div class="col-xs-12 col-md-12 col-sm-12">
                           <h3 class="main-title text-left">
                              Related Ads
                           </h3>
                        </div>
                     </div>
                     <!-- Ads Archive -->
                     <div class="posts-masonry">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                           <!-- Ads Listing -->
                           <?php get_all_related_ad_by_category($book['category'],$adno); ?>
                           <!-- Ads Listing -->
                        </div>
                     </div>
                  </div>
                  <!-- =-=-=-=-=-=-= Latest Ads End =-=-=-=-=-=-= -->
               </div>
               <!-- Right Sidebar -->
               <div class="col-md-4 col-xs-12 col-sm-12">
                  <!-- Sidebar Widgets -->
                  <div class="sidebar">
                     <!-- Contact info -->
                     <div class="contact white-bg">
                        <!-- Email Button trigger modal -->
                        <button class="btn-block btn-contact contactEmail" data-toggle="modal" data-target=".price-quote" >Contact Poster Via Email</button>
                        <!-- Email Modal -->
                        <button class="btn-block btn-contact contactPhone number" data-last="<?php echo $mobile_last_part; ?>" >0<?php echo $mobile_first_part; ?><span>XXXXX</span></button>
                     </div>
                     <!-- Price info block -->   
                     <div class="ad-listing-price">
                        <p>BDT <?php echo $price.$extra.$rent_type; ?></p>
                     </div>
                     <!-- User Info -->
                     <div class="white-bg user-contact-info">
                        <div class="user-info-card">
                           <div class="user-photo col-md-4 col-sm-3  col-xs-4">
                              <img src="images/users/3.jpg" alt="">
                           </div>
                           <div class="user-information no-padding col-md-8 col-sm-9 col-xs-8">
                              <span class="user-name"><a class="hover-color" href="profile.php"><?php echo $book['name']; ?></a></span>
                              <div class="item-date">
                                 <span class="ad-pub">Published on: <?php echo $book['postedon']; ?></span><br>
                              </div>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                        <div class="ad-listing-meta">
                           <ul>
                              <li>Ad Id: <span class="color"><?php echo $book['adno']; ?></span></li>
                              <li>Categories: <span class="color"><?php echo $book['category']; ?></span></li>
                              <li>Sub Category: <span class="color"><?php echo $book['sub_category']; ?></span></li>
                              <li>Location: <span class="color"><?php echo $book['address']; ?></span></li>
                           </ul>
                        </div>
                        <!-- <div id="itemMap" style="width: 100%; height: 370px; margin-bottom:5px;"></div> -->
                     </div>
                     <!-- Featured Ads --> 
                     <!-- Recent Ads --> 
                     <div class="widget">
                        <div class="widget-heading">
                           <h4 class="panel-title"><a>Recent Ads</a></h4>
                        </div>
                        <div class="widget-content recent-ads">
                           <!-- Ads -->
                           <?php get_all__recent_books(); ?>
                           <!-- Ads -->
                        </div>
                     </div>
                     <!-- Saftey Tips  --> 
                     <div class="widget">
                        <div class="widget-heading">
                           <h4 class="panel-title"><a>Safety tips for deal</a></h4>
                        </div>
                        <div class="widget-content saftey">
                           <ol>
                              <li>Use a safe location to meet seller</li>
                              <li>Avoid cash transactions</li>
                              <li>Beware of unrealistic offers</li>
                           </ol>
                        </div>
                     </div>
                  </div>
                  <!-- Sidebar Widgets End -->
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
   <!-- Post Ad Sticky -->
   <!-- Back To Top -->
   <a href="#0" class="cd-top">Top</a>

   <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->
   <div class="modal fade price-quote" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
               <h3 class="modal-title" id="lineModalLabel">Email for Price</h3>
            </div>
            <div class="modal-body">
               <div class="recent-ads">
                  <div class="recent-ads-list">
                     <div class="recent-ads-container">
                        <div class="recent-ads-list-image">
                           <a href="#" class="recent-ads-list-image-inner">
                              <img src="images/car.png" alt="">
                           </a><!-- /.recent-ads-list-image-inner -->
                        </div>
                        <!-- Contact add poster via Email  -->
                        <div class="recent-ads-list-content">
                           <h3 class="recent-ads-list-title">
                              <a href="#">Honda Civic Oriel 1.8 i-VTEC CVT 2017</a>
                           </h3>
                           <ul class="recent-ads-list-location">
                              <li><a href="#"><?php echo $book['name']; ?></a>,</li>
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
               </div>
               <!-- content goes here -->
               <form>
                  <div class="form-group  col-md-6  col-sm-6">
                     <label>Your Name</label>
                     <input type="text" class="form-control" placeholder="Enter Your Name"> 
                  </div>
                  <div class="form-group  col-md-6  col-sm-6">
                     <label>Email Address</label>
                     <input type="email" class="form-control" placeholder="Enter email"> 
                  </div>
                  <div class="form-group  col-md-12  col-sm-12">
                     <label>Contact No</label>
                     <input type="text" class="form-control" placeholder="Contact No"> 
                  </div>
                  <div class="form-group  col-md-12  col-sm-12">
                     <label>Comments</label>
                     <textarea placeholder="What is the price of the Honda Civic 2017 you have in your inventory?" rows="3" class="form-control">What is the price of the 2015 Honda Accord EX-L you have in your inventory?</textarea>
                  </div>
                  <div class="col-md-12  col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12  col-sm-12 margin-bottom-20 margin-top-20">
                     <button type="submit" class="btn btn-theme btn-block">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

   <!-- =-=-=-=-=-=-= Share Modal =-=-=-=-=-=-= -->
   <div class="modal fade share-ad" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
               <h3 class="modal-title">Share</h3>
            </div>
            <div class="modal-body">
               <div class="recent-ads">
                  <div class="recent-ads-list">
                     <div class="recent-ads-container">
                        <div class="recent-ads-list-image">
                           <a href="#" class="recent-ads-list-image-inner">
                              <img src="images/car.png" alt="">
                           </a><!-- /.recent-ads-list-image-inner -->
                        </div>
                        <!-- /.recent-ads-list-image -->
                        <div class="recent-ads-list-content">
                           <h3 class="recent-ads-list-title">
                              <a href="#">Honda Civic Oriel 1.8 i-VTEC CVT 2017</a>
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
               </div>
               <h3>Key Features</h3>
               <p>Alarm, Alloy Wheels, Anti-Lock Brakes, Automatic Air Conditioning, Bluetooth Interface Telephone Equipment, Body Coloured Bumpers, Centre Console, Centre Rear Seat Belt, Cloth interior, Cruise Control, Driver Information System</p>
               <h3>Link</h3>
               <p><a href="https://themeforest.net/user/scriptsbundle/portfolio">https://themeforest.net/user/scriptsbundle/portfolio</a></p>
            </div>
            <div class="modal-footer">
               <a href="" class="btn btn-fb btn-md"><i class="fa fa-facebook"></i></a>
               <a class="btn btn-twitter btn-md"><i class="fa fa-twitter"></i></a>
               <a class="btn btn-gplus btn-md"><i class="fa fa-google-plus"></i></a>
            </div>
         </div>
      </div>
   </div>

   <!-- =-=-=-=-=-=-= Report Ad Modal =-=-=-=-=-=-= -->
   <div class="modal fade report-quote" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
               <h3 class="modal-title">Why are you reporting this ad?</h3>
            </div>
            <div class="modal-body">
               <!-- content goes here -->
               <form>
                  <div class="skin-minimal">
                     <div class="form-group col-md-6 col-sm-6">
                        <ul class="list">
                           <li >
                              <input type="radio" id="spam" name="minimal-radio">
                              <label for="spam">Spam</label>
                           </li>
                           <li>
                              <input  type="radio" id="duplicated" name="minimal-radio" >
                              <label for="duplicated">Duplicated</label>
                           </li>
                        </ul>
                     </div>
                     <div class="form-group  col-md-6 col-sm-6">
                        <ul class="list">
                           <li >
                              <input  type="radio" id="offensive" name="minimal-radio">
                              <label for="offensive">Offensive</label>
                           </li>
                           <li>
                              <input  type="radio" id="expired" name="minimal-radio" checked>
                              <label for="expired">Expired</label>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="form-group  col-md-12 col-sm-12">
                     <label>Comments</label>
                     <textarea placeholder="This ad not belong to me" rows="3" class="form-control">This ad not belong to me</textarea>
                  </div>
                  <div class="col-md-12 col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12 col-sm-12 margin-bottom-20 margin-top-20">
                     <button type="submit" class="btn btn-theme btn-block">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

   <!-- =-=-=-=-=-=-= Ad Detail Modal =-=-=-=-=-=-= -->
   <div class="sticky-ad-detail">
      <div class="container">
         <div class="col-md-7 col-sm-12 col-xs-12 no-padding">
            <div class="">
               <h3><?php echo $book['title']; ?></h3>
               <div class="short-history">
                  <ul>
                     <li>Published on: <b><?php echo $book['postedon']; ?></b></li>
                     <li>Location: <b><?php echo $book['address']; ?></b></li>
                     <li>Condition: <b><a href="#"><?php echo $book['book_condition']; ?></a></b></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-5  col-sm-12 col-xs-12 no-padding">
            <div class="pull-left row">
               <div class="col-md-6 col-sm-6 col-xs-12 ">
                  <a href="javascript:void(0)" class="btn btn-block pull-left btn-phone number " data-last="<?php echo $mobile_last_part; ?>"><i class="fa fa-phone"></i> 0<?php echo $mobile_first_part; ?><span>XXXXX</span></a>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <a data-toggle="modal" data-target=".price-quote"  href="javascript:void(0)" class="btn btn-block pull-left btn-message"><i class="icon-envelope"></i> Message Seller</a>
               </div>
            </div>
         </div>
      </div>
   </div>

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
   <!-- For This Page Only -->
   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVj6yChAfe1ilA4YrZgn_UCAnei8AhQxQ&sensor=false"></script>
   <script type="text/javascript">
      (function($) {
         "use strict";
         /* ======= Show Number ======= */
         $('.number').click(function() {
            $(this).find('span').text( $(this).data('last') );
         });
          //caches a jQuery object containing the header element
          var header = $(".sticky-ad-detail");
          $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 500) {
               header.addClass("show-sticky-ad-detail");
            } else {
               header.removeClass("show-sticky-ad-detail");
            }
         });
       })
      (jQuery);


      function addToFavourite(adno){
         // alert(adno);
         var data = {"adno": adno};
         jQuery.ajax({
           url: "add-to-favourites.php",
           type:'POST',
           data: data,
           success:function(data){
            // alert(data);
         // document.getElementById("list-of-book").innerHTML = data;
         // $("#list-of-book").html(response);
         // location.reload();
         document.getElementById("favourite").innerHTML = data;
      },
      error: function(){
         alert("Something wrong");
      }
   });
      }
   </script>
</body>
</html>