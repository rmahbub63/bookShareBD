<!DOCTYPE html>
<!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
<footer class="footer-area no-bg">
   <!--Footer Upper-->
   <div class="footer-content">
      <div class="container">
         <div class="row clearfix">
            <!--Two 4th column-->
            <div class="col-md-6 col-sm-12 col-xs-12">
               <div class="row clearfix">
                  <div class="col-lg-7 col-sm-6 col-xs-12 column">
                     <div class="footer-widget about-widget">
                        <div class="logo">
                           <a href="index.php"><img alt="" class="img-responsive" src="images/logo.png"></a>
                        </div>
                        <div class="text">
                           <p>Sell & Buy Books|Novels in Your Locality</p>
                        </div>
                        <ul class="contact-info">
                           <li><span class="icon fa fa-map-marker"></span> 102 Mirpur Road, Dhaka 1207</li>
                           <li><span class="icon fa fa-phone"></span> (+880) 123456789</li>
                           <li><span class="icon fa fa-envelope-o"></span> contact@booksharebd.com</li>
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
                        <h3 class="main-title text-left">Learn More</h3>
                     </div>
                     <div class="footer-widget links-widget">
                        <ul>
                           <li><a href="#">How to sell fast</a></li>
                           <li><a href="#">Membership</a></li>
                           <li><a href="#">Promote your ad</a></li>
                           <li><a href="#">Buy Now on</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!--Two 4th column End-->
            <!--Two 4th column-->
            <div class="col-md-6 col-sm-12 col-xs-12">
               <div class="row clearfix">
                  <div class="col-lg-5 col-sm-6 col-xs-12 column">
                     <div class="footer-widget links-widget">
                        <div class="heading-panel">
                           <h3 class="main-title text-left"> Help & Support</h3>
                        </div>
                        <ul>
                           <li><a href="about.php">FAQ</a></li>
                           <li><a href="#">Stay safe on</a></li>
                           <li><a href="#">Terms & Conditions</a></li>
                           <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>

                  <div class="col-lg-5 col-sm-6 col-xs-12 column">
                     <div class="footer-widget links-widget">
                        <div class="heading-panel">
                           <h3 class="main-title text-left"> About Us</h3>
                        </div>
                        <ul>
                           <li><a href="about.php">About Us</a></li>
                           <li><a href="#">Our Team</a></li>
                           <li><a href="#">How It Works</a></li>
                           <li><a href="contact.php">Contact Us</a></li>
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
         <div class="copyright text-center">Copyright 2018 © BookShareBD  All Rights Reserved</div>
      </div>
   </div>
</footer>
<!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->

<script type="text/javascript">
   function detailsmodal(adno){
      // alert("Here");
      var data = {"adno": adno};
      jQuery.ajax({
       url: "includes/index/detailsmodal.php",
       type:'POST',
       data: data,
       success:function(data){
         // alert(data);
         jQuery('body').append(data);
         jQuery('#details-model').modal('toggle');
      },
      error: function(){
         alert("Something wrong");
      }
   });
   }

   function functionforSearch(){
   var searchKey = document.getElementById('search_key').value;
   var category = document.getElementById('categoryOption').value;

      // alert(category);
      var data = {"key": searchKey,
      "category": category};
      jQuery.ajax({
        url: "show-search-result.php",
        type:'POST',
        data: data,
        success:function(data){
         // alert(data);
         document.getElementById("list-of-book").innerHTML = data;
         // $("#list-of-book").html(response);
         // location.reload();
         // document.getElementById("list-of-book").innerHTML = "data";
      },
      error: function(){
         alert("Something wrong");
      }
   });
   }

</script>