<!DOCTYPE html>
<html lang="en">
<head>
   <?php
   require_once 'includes/header.php';
   // show_categories_add_ad_page();
   ?>
   <!-- =-=-=-=-=-=-= For This Page Only =-=-=-=-=-=-= -->
   <link rel="stylesheet" href="css/dropzone.css">
   <link href="css/jquery.tagsinput.min.css" rel="stylesheet">
   <!-- JavaScripts -->
   <script src="js/modernizr.js"></script>
   <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
   <script src="js/jquery.min.js"></script>

   <!-- My Custom JS CODE -->
   <script src="js/myscripts.js"></script>


   <!-- Ajax for dropdownlist of Sub Category -->
   <script type="text/javascript">

    $(function() {
      $('input[name="book_adtype"]').on('click', function() {
       if ($(this).val() == 'Sell') {
         $('#sellPrice').show();
         $('#rentPriceAndType').hide();
         $('#securityMoneyAndOriginalPrice').hide();
         //
         $('#sell_price').attr('required', '');
         $("#rentPrice").removeAttr('required');
         $("#rentType").removeAttr('required');
         $("#securityMoney").removeAttr('required');
         $("#originalBookPrice").removeAttr('required');
      }
      else {
         $('#sellPrice').hide();
         $('#rentPriceAndType').show();
         $('#securityMoneyAndOriginalPrice').show();
         //
         $('#sell_price').removeAttr('required', '');
         $("#rentPrice").attr('required');
         $("#rentType").attr('required');
         $("#securityMoney").attr('required');
         $("#originalBookPrice").attr('required');
      }
   });
   });
   // function radio_action()
   // {
   //    alert("why");
   // }
</script>
</head>
<body>
   <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
   <div class="page-header-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="header-page">
                  <h1>Ad Posting <?php add_book(); ?> </h1>
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
               <li><a href="#">Pages</a></li>
               <li><a class="active" href="#">Post Ad</a></li>
            </ul>
         </div>
      </div>
   </div>
   <!-- Small Breadcrumb -->
   <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
   <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
   <div class="main-content-area clearfix">
      <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
      <section class="section-padding  gray ">
         <!-- Main Container -->
         <div class="container">
            <!-- Row -->
            <div class="row">
               <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
                  <!-- end post-padding -->
                  <div class="post-ad-form postdetails">
                     <div class="heading-panel">
                        <h3 class="main-title text-left">
                           Post Your Book ad
                        </h3>
                     </div>
                     <p class="lead">Posting an book ad on <a href="#">BookShareBD</a> is free! However, all ads must follow our rules:</p>
                     <form action="" method="post" class="submit-form" enctype="multipart/form-data">
                        <div class="row">
                           <!-- Select Category  -->
                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                              <label class="control-label">Category <small>Select suitable category for your book</small></label>
                              <!-- Show all category -->
                              <select id="category" name="book_category" class="category form-control" required>
                                 <option label="Select Option"></option>
                                 <?php show_categories_add_ad_page(); ?>
                              </select>
                           </div>

                           <!-- Select Sub Category  -->
                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                              <label class="control-label">Sub Category <small>Select suitable sub category</small></label>
                              <select id="subcategory" name="book_subcategory" class="category form-control" disabled="disabled" required>
                                 <option label="Select Option"></option>
                              </select>
                           </div>
                           <!-- End Row -->
                        </div>
                        <!--Book Title  -->
                        <div class="row">
                           <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                              <label class="control-label">Book Title <small>Enter the full title Of Book</small></label>
                              <input name="book_title" id="bookTitle" class="form-control" placeholder="Ex. JavaScript and JQuery: Interactive Front-End Web Development" type="text" required>
                           </div>
                        </div>
                        <!--Book Author  -->
                        <div class="row">
                           <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                              <label class="control-label">Author Name <small>Enter the name of Author</small></label>
                              <input name="book_authorName" class="form-control" placeholder="Ex. Jon Duckett" type="text" required>
                           </div>
                        </div>
                        <!-- Edition & ISBN -->
                        <div class="row">
                           <!-- Edition No  -->
                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                              <label class="control-label">Edition No<small>Edition no only</small></label>
                              <input name="book_editionNo" class="form-control" placeholder="ex. 1st" type="text" required>
                           </div>

                           <!-- ISBN  -->
                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                              <label class="control-label">ISBN<small>Full ISBN (if any)</small></label>
                              <input name="book_isbn" class="form-control" placeholder="ex. 9789848072059" type="text" required>
                           </div>
                        </div>
                        <!-- End Row -->
                        <!-- Ad Type  -->
                        <div class="row">
                           <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                              <label class="control-label">Type Of Book Ad<small>want to sale or rent</small></label>
                              <div class="skin-minimal">
                                 <ul >
                                    <li>
                                       <input type="radio" id="sell" name="book_adtype" value="Sell" required>
                                       <label  for="sell">Sell</label>
                                    </li>
                                    <li>
                                       <input type="radio" id="rent" name="book_adtype" value="Rent">
                                       <label for="rent">Rent</label>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <!-- Selling Price  -->
                        <div class="row" id="sellPrice" style="display: none;">
                           <div class="col-md-6 col-lg-12 col-xs-12 col-sm-12">
                              <label class="control-label">Selling Price<small>BDT only</small></label>
                              <input name="book_sell_price" id="sell_price" class="form-control" placeholder="ex. ৳ 350" type="text" required>
                           </div>
                           <!-- end row -->
                        </div>
                        <!-- Rent Price -->
                        <div class="row" id="rentPriceAndType" style="display: none;">
                           <!-- Rent Price  -->
                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                              <label class="control-label">Rent Price<small>BDT only</small></label>
                              <input name="book_rent_price" id="rentPrice" class="form-control" placeholder="ex. ৳ 25" type="text" required>
                           </div>

                           <!-- Select Rent type  -->
                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                              <label class="control-label">Rent Type <small>Select a Rent Type</small></label>
                              <select name="book_rent_type" id="rentType" class="category form-control" required>
                                 <option label="Select Option"></option>
                                 <option value="Daily">Daily</option>
                                 <option value="Weekly">Weekly</option>
                                 <option value="Monthly">Monthly</option>
                              </select>
                           </div>
                           <!-- End Row -->
                        </div>

                        <!-- Security Money -->
                        <div class="row" id="securityMoneyAndOriginalPrice" style="display: none;">
                           <!-- Security Money  -->
                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                              <label class="control-label">Security Money<small>BDT only</small></label>
                              <input name="book_securityMoney" id="securityMoney" class="form-control" placeholder="ex. ৳ 180" type="text" required>
                           </div>

                           <!-- Original Book Price  -->
                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                              <label class="control-label">Original Book Price<small>BDT only</small></label>
                              <input name="book_originalBookPrice" id="originalBookPrice" class="form-control" placeholder="ex. ৳ 250" type="text" required>
                           </div>
                        </div>
                        <!-- Image Upload  -->
                        <div class="row">
                           <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                              <label class="control-label">Photos for your ad <small>Please add images of your ad. (350x450)</small></label>
                              <input type="file" id="file" name="file" class="form-control" required>
                           </div>
                        </div>
                        <!-- end row -->
                        <!-- Ad Description  -->
                        <div class="row">
                           <div class="col-md-12 col-lg-12 col-xs-12  col-sm-12">
                              <label class="control-label">Book Description <small>Enter description of your book</small></label>
                              <textarea name="book_desc" id="bookDescription" id="editor1" rows="12" class="form-control" placeholder="" required></textarea>
                           </div>
                        </div>
                        <!-- end row -->
                        <!-- Ad Tags  -->
                        <div class="row">
                           <div class="col-md-12 col-lg-12 col-xs-12  col-sm-12">
                              <label class="control-label">Book Tags </label>
                              <input name ="book_tags" class="form-control" id="tags" placeholder="Ex. javascript,jquery,front-end,web evelopment" required>
                           </div>
                        </div>
                        <!-- end row -->
                        <!-- Ad Condition  -->
                        <div class="row">
                           <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                              <label class="control-label">Condition<small>Book Condition</small></label>
                              <div class="skin-minimal">
                                 <ul class="list">
                                    <li>
                                       <input type="radio" id="new" name="conditions" value="New" required>
                                       <label  for="new">New</label>
                                    </li>
                                    <li>
                                       <input type="radio" id="fine" name="conditions" value="Fine" >
                                       <label for="fine">Fine</label>
                                    </li>
                                    <li>
                                       <input type="radio" id="fair" name="conditions" value="Fair">
                                       <label for="fair">Fair</label>
                                    </li>
                                    <li>
                                       <input type="radio" id="poor" name="conditions" value="Poor">
                                       <label for="poor">Poor</label>
                                    </li>
                                    <li>
                                       <input type="radio" id="local" name="conditions" value="Local Binding">
                                       <label for="local">Local Binding</label>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                              <label class="control-label">Your Name</label>
                              <input id="" id="name" name="user_name" class="form-control" placeholder="ex. Mahbubur Rahman" type="text" required>
                           </div>
                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                              <label class="control-label">Your Email ID<small>where you receive your emails</small></label>
                              <input id="email" name="user_email" class="form-control" placeholder="ex. rmahbub63@gmail.com" type="text" required>
                           </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                              <label class="control-label">Mobile Number<small>number for contact</small></label>
                              <input id="phone" name="user_phone" class="form-control" placeholder="ex. 01234567891" type="text" required>
                           </div>
                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                              <label class="control-label">Address<small>your current address</small></label>
                              <input id="address" name="user_address" class="form-control" placeholder="ex. 108/2, Sankar, Dhanmondi" type="text" required>
                           </div>
                        </div>
                        <!-- end row -->
                        <button type="submit" name="publish" value="Publish" class="btn btn-theme pull-right">Publish My Ad</button>
                     </form>
                  </div>
                  <!-- end post-ad-form-->
               </div>
               <!-- Image Upload  -->
            <!-- <form action="dbhelper/saveadimage.php" method="post" enctype="multipart/form-data">
             Select image to upload:
             <input type="file" name="image"/>
             <input type="submit" name="submit" value="UPLOAD"/>
          </form> -->
          <!-- end col -->
          <!-- Right Sidebar -->
          <div class="col-md-4 col-xs-12 col-sm-12">
            <!-- Sidebar Widgets -->
            <div class="blog-sidebar">
               <!-- Categories --> 
               <div class="widget">
                  <div class="widget-heading">
                     <h4 class="panel-title"><a>Saftey Tips </a></h4>
                  </div>
                  <div class="widget-content">
                     <p class="lead">Posting an ad on <a href="#">AdForest.com</a> is free! However, all ads must follow our rules:</p>
                     <ol>
                        <li>Make sure you post in the correct category.</li>
                        <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                        <li>Do not upload pictures with watermarks.</li>
                        <li>Do not post ads containing multiple items unless it's a package deal.</li>
                        <li>Do not put your email or phone numbers in the title or description.</li>
                        <li>Make sure you post in the correct category.</li>
                        <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                        <li>Do not upload pictures with watermarks.</li>
                        <li>Do not post ads containing multiple items unless it's a package deal.</li>
                     </ol>
                  </div>
               </div>
               <!-- Latest News --> 
            </div>
            <!-- Sidebar Widgets End -->
         </div>
         <!-- Middle Content Area  End --><!-- end col -->
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
<!-- Back To Top -->
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
<!-- For this Page Only -->
<!-- Ckeditor  -->
<script src="js/ckeditor/ckeditor.js" ></script>
<!-- Ad Tags  -->
<script src="js/jquery.tagsinput.min.js"></script>
<!-- DROPZONE JS  -->
<script src="js/dropzone.js" ></script>
<script src="js/form-dropzone.js" ></script>
<script type="text/javascript">
   "use strict";

   /*--------- Textarea Ck Editor --------*/
   CKEDITOR.replace( 'editor1' );

   /*--------- Ad Tags --------*/ 
   $('#tags').tagsInput({
      'width':'100%'
   });

   (jQuery);



</script>
<!-- JS -->
</body>
</html>