<!DOCTYPE html>
<html lang="en">
<head>
   <!-- =-=-=-=-=-=-= Including Header =-=-=-=-=-=-= -->
   <?php
   require_once 'includes\header.php';
   is_logged_in_admin();
   ?>
   <!-- =-=-=-=-=-=-= Header  Complete=-=-=-=-=-=-= -->
</head>
<body>

   <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
   <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
      <!--<div class="page-header-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="header-page">
                     <h1>User Sign In</h1>
                  </div>
               </div>
            </div>
         </div>
      </div>-->
      <!-- Small Breadcrumb -->
      <div class="small-breadcrumb">
         <div class="container">
            <div class=" breadcrumb-link">
               <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="index.php">Profile</a></li>
                  <li><a class="active" href="index.php">Inbox</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <!-- COURSE CONCERN -->
         <section class="section-padding gray">
            <div class="container">
               <div class="row">
                <div class="message-body">
                  <div class="col-md-4 col-sm-5 col-xs-12">
                     <div class="message-inbox">
                        <div class="message-header">
                           <h4>Inbox</h4>
                        </div>
                        <ul class="message-history">
                           <!-- LIST ITEM -->
                           <li class="message-grid">
                              <a href="#">
                                 <div class="image">
                                    <img src="images/users/1.jpg" alt="">
                                 </div>
                                 <div class="user-name">
                                    <div class="author">
                                       <span>John Doe</span><div class="user-status"></div>
                                    </div>
                                    <p>Xperia Z5 For Sale</p>
                                    <div class="time">
                                     <span>7 days ago</span>
                                  </div>
                               </div>
                            </a>
                         </li>
                         <!-- END / LIST ITEM -->
                         <!-- LIST ITEM -->
                         <li class="message-grid">
                           <a href="#">
                              <div class="image">
                                 <img src="images/users/2.jpg" alt="">
                              </div>
                              <div class="user-name">
                                 <div class="author">
                                    <span>Alex Curt</span><div class="user-status"></div>
                                 </div>
                                 <p>BMW Car For Sale</p>
                                 <div class="time">
                                    <span>2 days ago</span>
                                 </div>
                              </div>
                           </a>
                        </li>
                        <!-- END / LIST ITEM -->

                        <!-- LIST ITEM -->
                        <li class="message-grid">
                           <a href="#">
                              <div class="image">
                                 <img src="images/users/3.jpg" alt="">
                              </div>
                              <div class="user-name">
                                 <div class="author">
                                    <span>Sonu Monu</span><div class="user-status"></div>
                                 </div>
                                 <p>Xperia z5 for sale</p>
                                 <div class="time">
                                  <span>1 days ago</span>
                               </div>
                            </div>
                         </a>
                      </li>
                      <!-- END / LIST ITEM -->
                      <!-- LIST ITEM -->
                      <li class="active">
                        <a href="#">
                           <div class="image">
                              <img src="images/users/4.jpg" alt="">
                           </div>
                           <div class="user-name">
                              <div class="author">
                                 <span>Arslan Tariq</span><div class="user-status"></div>
                              </div>
                              <p>HHonda Civic 2017 Sports</p>
                              <div class="time">
                                 <span>3 days ago</span>
                              </div>
                           </div>
                        </a>
                     </li>
                     <!-- END / LIST ITEM -->
                     <!-- LIST ITEM -->
                     <li class="message-grid">
                        <a href="#">
                           <div class="image">
                              <img src="images/users/5.jpg" alt="">
                           </div>
                           <div class="user-name">
                              <div class="author">
                                 <span>Alexa Grey</span><div class="user-status"></div>
                              </div>
                              <p>Pet For Sale</p>
                              <div class="time">
                                 <span>1 days ago</span>
                              </div>

                           </div>
                        </a>
                     </li>
                     <!-- END / LIST ITEM -->
                     <!-- LIST ITEM -->
                     <li>
                        <a href="#">
                           <div class="image">
                              <img src="images/users/6.jpg" alt="">
                           </div>
                           <div class="user-name">
                              <div class="author">
                                 <span>Humayun</span><div class="user-status"></div>
                              </div>
                              <p>Lcd for sale</p>
                              <div class="time">
                                 <span>5 days ago</span>
                              </div>
                           </div>
                        </a>
                     </li>
                     <!-- END / LIST ITEM -->
                  </ul>
               </div>
            </div>
            <div class="col-md-8 clearfix col-sm-5 col-xs-12 message-content">
               <div class="message-details">
                  <div class="author">
                     <div class="image">
                        <img src="images/users/3.jpg" alt="">
                     </div>
                     <span class="author-name">Sonu Monu</span>
                     <em>5 days ago</em>
                  </div>
                  <!-- <h2>Sony Xperia Z5 For Sale</h2> -->
                  <ul class="messages">
                     <li class="friend-message clearfix">
                        <figure class="profile-picture">
                           <img src="images/users/1.jpg" class="img-circle" alt="Profile Pic">
                        </figure>
                        <div class="message">
                           Morning! How are you doing today?
                           <div class="time"><i class="fa fa-clock-o"></i> Today 8:53 AM</div>
                        </div>
                     </li>
                     <li class="my-message clearfix">
                        <figure class="profile-picture">
                           <img src="images/users/2.jpg" class="img-circle" alt="Profile Pic">
                        </figure>
                        <div class="message">
                           Hey! I am doing good! What about you?
                           <div class="time"><i class="fa fa-clock-o"></i> Today 8:55 AM</div>
                        </div>
                     </li>
                     <li class="friend-message clearfix">
                        <figure class="profile-picture">
                           <img src="images/users/1.jpg" class="img-circle" alt="Profile Pic">
                        </figure>
                        <div class="message">
                           Doing great!
                           <div class="time"><i class="fa fa-clock-o"></i> Today 8:56 AM</div>
                        </div>
                     </li>
                     <li class="friend-message clearfix">
                        <figure class="profile-picture">
                           <img src="images/users/2.jpg" class="img-circle" alt="Profile Pic">
                        </figure>
                        <div class="message">
                           We just received a new project.
                           <div class="time"><i class="fa fa-clock-o"></i> Today 8:56 AM</div>
                        </div>
                     </li>
                     <li class="my-message clearfix">
                        <figure class="profile-picture">
                           <img src="images/users/1.jpg" class="img-circle" alt="Profile Pic">
                        </figure>
                        <div class="message">
                           Sweet! What is it about?
                           <div class="time"><i class="fa fa-clock-o"></i> Today 9:00 AM</div>
                        </div>
                     </li>
                     <li class="friend-message clearfix">
                        <figure class="profile-picture">
                           <img src="images/users/2.jpg" class="img-circle" alt="Profile Pic">
                        </figure>
                        <div class="message">
                           An Android and IOS app for client X.
                           <div class="time"><i class="fa fa-clock-o"></i> Today 9:03 AM</div>
                        </div>
                     </li>
                     <li class="my-message clearfix">
                        <figure class="profile-picture">
                           <img src="images/users/1.jpg" class="img-circle" alt="Profile Pic">
                        </figure>
                        <div class="message">
                           Is it a complex project? What is the deadline?
                           <div class="time"><i class="fa fa-clock-o"></i> Today 9:07 AM</div>
                        </div>
                     </li>
                     <li class="friend-message clearfix">
                        <figure class="profile-picture">
                           <img src="images/users/2.jpg" class="img-circle" alt="Profile Pic">
                        </figure>
                        <div class="message">
                           Nah! Rather simple for the team. We have 3 months to deliver the final product.
                           <div class="time"><i class="fa fa-clock-o"></i> Today 9:08 AM</div>
                        </div>
                     </li>
                     <li class="friend-message clearfix">
                        <figure class="profile-picture">
                           <img src="images/users/1.jpg" class="img-circle" alt="Profile Pic">
                        </figure>
                        <div class="message">
                           The client has a budget of $5000 btw.
                           <div class="time"><i class="fa fa-clock-o"></i> Today 9:09 AM</div>
                        </div>
                     </li>
                     <li class="my-message clearfix">
                        <figure class="profile-picture">
                           <img src="images/users/2.jpg" class="img-circle" alt="Profile Pic">
                        </figure>
                        <div class="message">
                           That is awesome!
                           <div class="time"><i class="fa fa-clock-o"></i> Today 9:12 AM</div>
                        </div>
                     </li>
                     <li class="my-message clearfix">
                        <figure class="profile-picture">
                           <img src="images/users/1.jpg" class="img-circle" alt="Profile Pic">
                        </figure>
                        <div class="message">
                           With that budget we can make something pretty powerful. As soon as I get to the office we can start the team briefing!
                           <div class="time"><i class="fa fa-clock-o"></i> Today 9:12 AM</div>
                        </div>
                     </li>
                     <li class="friend-message clearfix">
                        <figure class="profile-picture">
                           <img src="images/users/2.jpg" class="img-circle" alt="Profile Pic">
                        </figure>
                        <div class="message">
                           Absolutely! Can't wait to get started!
                           <div class="time"><i class="fa fa-clock-o"></i> Today 9:14 AM</div>
                        </div>
                     </li>
                     <li class="my-message clearfix">
                        <figure class="profile-picture">
                           <img src="images/users/1.jpg" class="img-circle" alt="Profile Pic">
                        </figure>
                        <div class="message">
                           I am just grabbing the coffee and doughnuts. I will be at the office ASAP.
                           <div class="time"><i class="fa fa-clock-o"></i> Today 9:17 AM</div>
                        </div>
                     </li>
                     <li class="friend-message clearfix">
                        <figure class="profile-picture">
                           <img src="images/users/2.jpg" class="img-circle" alt="Profile Pic">
                        </figure>
                        <div class="message">
                           Sure. We are wrapping up the previous project, you have some time.
                           <div class="time"><i class="fa fa-clock-o"></i> Today 9:18 AM</div>
                        </div>
                     </li>
                     <li class="my-message clearfix">
                        <figure class="profile-picture">
                           <img src="images/users/1.jpg" class="img-circle" alt="Profile Pic">
                        </figure>
                        <div class="message">
                           Alrighty, cool!
                           <div class="time"><i class="fa fa-clock-o"></i> Today 9:17 AM</div>
                        </div>
                     </li>
                  </ul>
                  <div class="chat-form ">
                     <form role="form" class="form-inline">
                        <div class="form-group">
                           <input style="width: 100%" placeholder="Type a message here..." class="form-control" type="text">
                        </div>
                        <button class="btn btn-theme" type="submit">Send</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- END / COURSE CONCERN -->
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
<script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>
<script type="text/javascript">
   (function($) {
      "use strict";
      $('.message-history').wrap('<div class="list-wrap"></div>');
      function scrollbar() {
         var $scrollbar = $('.message-inbox .list-wrap');
         $scrollbar.perfectScrollbar({
          maxScrollbarLength: 150,
       });
         $scrollbar.perfectScrollbar('update');
      }
      scrollbar();
      $('.messages').wrap('<div class="list-wraps"></div>');
      function scrollbar1() {
         var $scrollbar1 = $('.message-details .list-wraps');
         $scrollbar1.perfectScrollbar({
          maxScrollbarLength: 150,
       });
         $scrollbar1.perfectScrollbar('update');
      }
      scrollbar1();
   })(jQuery);
</script>
</body>
</html>

