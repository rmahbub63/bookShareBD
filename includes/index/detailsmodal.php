
<?php 
require_once '../../functions/init.php';
$adno = $_POST['adno'];
$adno = (int)$adno;

$book = get_book_details_by_adno($adno);

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

$description = strip_tags($book['book_description']);
if (strlen($description) > 100) {
    // truncate string
  $stringCut = substr($description, 0, 100);
  $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
  $description = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
  $description .= '... <a href="single-page-listing.php?adno='.$adno.'">Read More</a>';
}
?>
<!-- Details modal -->
<?php ob_start(); ?>
<div class="quick-view-modal modalopen" id="details-model" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-lg ad-modal">
      <button class="close close-btn popup-cls" aria-label="Close" onclick="closeModal()" type="button"> <i class="fa-times fa"></i> </button>
      <div class="modal-content single-product">
         <div class="diblock">
            <div class="col-lg-7 col-sm-12 col-xs-12">
               <div class="clearfix"></div>
               <div class="flexslider single-page-slider">
                  <div class="flex-viewport">
                     <ul class="slides slide-main">
                        <li class=""><img alt="../../images/single-page/1.jpg" src="<?= "admin/".$book['ad_image'] ?>" title=""></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class=" col-sm-12 col-lg-5 col-xs-12">
               <div class="summary entry-summary">
                  <div class="ad-preview-details">
                     <div class="overview-price">
                        <span> <a href="single-page-listing.php"> <?= $book['title']; ?> </a></span>
                     </div>
                     <p>
                        <h4><?= $book['author'] ?></h4>
                     </p>
                     <div class="overview-price">
                        <span>BDT <?= $price.$extra.$rent_type; ?></span>
                     </div>
                     <div class="clearfix"></div>
                     <p><?= $description ?></p>
                     <ul class="car-info col-md-6 col-sm-6">
                        <li>
                           <span>Edition No:</span>
                           <p><?= $book['edition_no'] ?></p>
                        </li>
                        <li>
                           <span>ISBN:</span>
                           <p><?= $book['isbn'] ?></p>
                        </li>
                        <li>
                           <span>Condition:</span>
                           <p><?= $book['book_condition'] ?></p>
                        </li>
                     </ul>
                     <ul class="ad-preview-info col-md-6 col-sm-6">
                        <li>
                           <span>Posted On:</span>
                           <p><?= date("d/m/Y", strtotime($book['postedon'])); ?></p>
                        </li>
                        <li>
                           <span>Security Money:</span>
                           <p><?= $security_money ?></p>
                        </li>
                        <li>
                           <span>Original Price:</span>
                           <p><?= $orginal_price ?></p>
                        </li>
                     </ul>
                     <button onclick="location.href='single-page-listing.php?adno=<?= $adno ?>'" class="btn btn-theme btn-block" type="submit">View Full Add</button>
                  </div>
               </div>
               <!-- .summary -->
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
<!-- <script src="js/select2.min.js"></script> -->
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
   function closeModal() {
      jQuery('#details-model').modal('hide');
      setTimeout(function(){
         jQuery('#details-model').remove();
         jQuery('.modal-backdrop').remove();
      },500);
   }

   $('#details-model').on('hidden.bs.modal', function (e) {
      setTimeout(function(){
         jQuery('#details-model').remove();
         jQuery('.modal-backdrop').remove();
      },500);
   })
</script>

<?php echo ob_get_clean(); ?>