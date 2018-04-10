<?php include("../functions/init.php"); ?>
<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <![endif]-->
   <meta name="description" content="">
   <meta name="author" content="ScriptsBundle">
   <title>BookShareBD</title>
   <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
   <link rel="icon" href="../images/favicon.ico" type="image/x-icon" />
   <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
   <link rel="stylesheet" href="css/bootstrap.css">
   <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
   <link rel="stylesheet" href="css/style.css">
   <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
   <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
   <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
   <link href="css/flaticon.css" rel="stylesheet">
   <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
   <link rel="stylesheet" href="css/et-line-fonts.css" type="text/css">
   <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
   <link rel="stylesheet" href="css/forest-menu.css" type="text/css">
   <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
   <link rel="stylesheet" href="css/animate.min.css" type="text/css">
   <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
   <link href="css/select2.min.css" rel="stylesheet" />
   <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
   <link href="css/nouislider.min.css" rel="stylesheet">
   <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
   <link href="css/slider.css" rel="stylesheet">
   <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
   <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
   <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
   <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
   <link href="skins/minimal/minimal.css" rel="stylesheet">
   <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
   <link href="css/responsive-media.css" rel="stylesheet">
   <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
   <link rel="stylesheet" id="color" href="css/colors/defualt.css">
   <!-- JavaScripts -->
   <script src="js/modernizr.js"></script>


   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
   <!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
   <div class="colored-header">
      <!-- Navigation Menu -->
      <nav id="menu-1" class="mega-menu">
         <!-- menu list items container -->
         <section class="menu-list-items">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 col-md-12">
                     <!-- menu logo -->
                     <ul class="menu-logo">
                        <li>
                           <a href="index.php"><img src="images/logo.png" alt="logo"> </a>
                        </li>
                     </ul>
                     <!-- menu links -->
                     <ul class="menu-links">
                        <!-- active class -->
                        <li>
                           <a href="javascript:void(0)">Study Books <i class="fa fa-angle-down fa-indicator"></i></a>
                           <!-- drop down multilevel  -->
                           <ul class="drop-down-multilevel">
                              <li>
                                 <a href="javascript:void(0)">Academics<i class="fa fa-angle-right fa-indicator"></i></a>
                                 <!-- drop down second level -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="category-listing.php?category=Academics&sub=Physics">Physics</a></li>
                                    <li><a href="category-listing.php">Chemistry</a></li>
                                    <li><a href="category-listing.php">Math</a></li>
                                    <li><a href="category-listing.php?category=Academics&sub=Science & Technology">Science & Technology</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Novel<i class="fa fa-angle-right fa-indicator"></i></a>
                                 <!-- drop down second level -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="category-listing.php">Fiction</a></li>
                                    <li><a href="category-listing.php">History</a></li>
                                    <li><a href="category-listing.php">Literature</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Business & Investing<i class="fa fa-angle-right fa-indicator"></i></a>
                                 <!-- drop down second level -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="category-listing.php">Marketing</a></li>
                                    <li><a href="category-listing.php">Finance</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Children books<i class="fa fa-angle-right fa-indicator"></i></a>
                                 <!-- drop down second level -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="category-listing.php">JOkes</a></li>
                                    <li><a href="category-listing.php">First Learning</a></li>
                                    <li><a href="category-listing.php">Comics</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </li>

                        <!-- /////////////////////////////////////// -->
                        <li>
                           <a href="javascript:void(0)">Lifestyle<i class="fa fa-angle-down fa-indicator"></i></a>
                           <!-- drop down multilevel  -->
                           <ul class="drop-down-multilevel">
                              <li>
                                 <a href="javascript:void(0)">Biography<i class="fa fa-angle-right fa-indicator"></i></a>
                                 <!-- drop down second level -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="category-listing.php">Biography and memoirs</a></li>
                                    <li><a href="category-listing.php">Ethics</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Health<i class="fa fa-angle-right fa-indicator"></i></a>
                                 <!-- drop down second level -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="category-listing.php">Brain</a></li>
                                    <li><a href="category-listing.php">Eating</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Romance<i class="fa fa-angle-right fa-indicator"></i></a>
                                 <!-- drop down second level -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="category-listing.php">Love</a></li>
                                    <li><a href="category-listing.php">Erotica</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Religion<i class="fa fa-angle-right fa-indicator"></i></a>
                                 <!-- drop down second level -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="category-listing.php">Islam</a></li>
                                    <li><a href="category-listing.php">Gita</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Politics<i class="fa fa-angle-right fa-indicator"></i></a>
                                 <!-- drop down second level -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="category-listing.php">Politician</a></li>
                                    <li><a href="category-listing.php">Food politics</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <!-- /////////////////////////////////////////////// -->
                        <li>
                           <a href="javascript:void(0)">Hobbies <i class="fa fa-angle-down fa-indicator"></i></a>
                           <!-- drop down multilevel  -->
                           <ul class="drop-down-multilevel">
                              <li>
                                 <a href="javascript:void(0)">Art & Photography<i class="fa fa-angle-right fa-indicator"></i></a>
                                 <!-- drop down second level -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="category-listing.php">Photography and video</a></li>
                                    <li><a href="category-listing.php">Fashion</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Cooking<i class="fa fa-angle-right fa-indicator"></i></a>
                                 <!-- drop down second level -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="category-listing.php">Nutrition</a></li>
                                    <li><a href="category-listing.php">Crockpot</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <!-- ///////////////////////////////////////////////////////// -->
                     </ul>
                     <ul class="menu-search-bar">
                        <li>
                           <a href="postad.php" class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i> Post Free Ad</a>
                        </li>
                     </ul>
                     <ul class="menu-links" style="padding-right: 20px; display: block; float: right; ">
                        <li>
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-profile-male" aria-hidden="true">
                           </i> <?php echo get_current_user_info()['name']; ?> <span class="caret"></span></a>
                           <!-- drop down multilevel  -->
                           <ul class="drop-down-multilevel">
                              <li><a href="profile.php">My Profile</a></li>
                              <li><a href="active-ads.php">My Ads</a></li>
                              <li><a href="favourite.php">Favourite Ads</a></li>
                              <li><a href="messages.php">Message Panel</a></li>
                              <li onclick="deleteAllCookies()"><a href="logout.php">Log Out</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </section>
      </nav>
   </div>
   <!-- Navigation Menu End -->
   <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
</head>
<body>

   <script>
      
     function deleteAllCookies()
     {document.cookie.split(";").forEach(function(c) { document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); }); }

  </script>

</body>
</html>