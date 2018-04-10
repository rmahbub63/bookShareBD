<?php

/*********** Showing category in add new book ad page ********/
function show_categories_add_ad_page(){
$query = query("SELECT * FROM book_category");
confirm($query);
while($row = fetch_array($query)) {
$categories_options = <<<DELIMETER
 <option value="{$row['cat_id']}">{$row['category_name']}</option>
DELIMETER;
echo $categories_options;
     }
}

/*********** Showing category in index page ********/
function show_categories_in_home_page(){
$query = query("SELECT * FROM book_category");
confirm($query);
while($row = fetch_array($query)) {
$categories_options = <<<DELIMETER
 <option value="{$row['cat_id']}">{$row['category_name']}</option>
DELIMETER;
echo $categories_options;
     }
}


/************* Get all book *********/
function get_all_books(){
$query = query("SELECT * FROM bookads order by adno DESC");
confirm($query);
while($row = fetch_array($query)) {
	// short description
$adno = $row['adno'];
// for getting the book for loggedin user and normal user
$image_path = $row['ad_image'];
if(!logged_in_check()){
  $image_path = "admin/".$row['ad_image'];
}
$description = strip_tags($row['book_description']);
if (strlen($description) > 230) {
    // truncate string
    $stringCut = substr($description, 0, 230);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $description = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
    $description .= '... <a href="single-page-listing.php?adno='.$adno.'">Read More</a>';
}
if(!strcasecmp($row['adtype'],"Rent")){
	$price = $row['rent_price'];
	$rent_type = $row['rent_type'];
	$security_money = $row['security_money'];
	$security_money = $row['orginal_price'];
	$extra = '/';
} else{
	$price = $row['selling_price'];
	$rent_type = '';
	$security_money = '';
	$security_money = '';
	$extra = '';
}

$books = <<<DELIMETER
  <li>
    <div class="well ad-listing clearfix">
       <div class="col-md-2 col-sm-5 col-xs-12 grid-style no-padding">
          <!-- Image Box -->
          <div class="img-box">
             <img src={$image_path} class="img-responsive" style="width: auto; height: 220px; align-content: center; margin-left: auto;
  margin-right: auto;" alt="">
             <div onclick="detailsmodal($adno)" class="quick-view"> <a href="" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
          </div>
          <!-- Ad Type -->
          <span class="ad-status"> {$row['adtype']} </span>
          <!-- User Preview -->
          <div class="user-preview">
             <a href="#"> <img src={$image_path} class="avatar avatar-small" alt=""> </a>
          </div>
       </div>
       <div class="col-md-10 col-sm-7 col-xs-12">
          <!-- Ad Content-->
          <div class="row">
             <div class="content-area">
                <div class="col-md-9 col-sm-12 col-xs-12">
                   <!-- Ad Title -->
                   <h3><a href="single-page-listing.php?adno={$adno}"> {$row['title']} </a></h3>
                   <!-- Writer Name -->
                   <div class="writer-name"> <span><strong>{$row['author']}</strong></span> </div>
                   <!-- Info Icons -->
                   <!-- Ad Meta Info -->
                   <ul class="ad-meta-info">
                      <li> <i class="fa fa-map-marker"></i><a href="#">{$row['address']}</a> </li>
                      <li> <i class="fa fa-clock-o"></i>{$row['postedon']} </li>
                   </ul>
                   <!-- Ad Description-->
                   <div class="ad-details">
                      <p>{$description}</p>
                   </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12">
                   <!-- Ad Stats -->
                   <div class="short-info">
                      <div class="ad-stats hidden-xs"><span>Caegory  : </span>{$row['category']}</div>
                      <div class="ad-stats hidden-xs"><span>Sub Category : </span>{$row['sub_category']}</div>
                      <div class="ad-stats hidden-xs"><span>Book Condition : </span>{$row['book_condition']}</div>
                   </div>
                   <!-- Price -->
                   <div class="price"> <span>BDT {$price} {$extra} {$rent_type}</span> </div>
                   <!-- Ad View Button -->
                   <a href="single-page-listing.php?adno={$adno}" class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</a>
                </div>
             </div>
          </div>
          <!-- Ad Content End -->
       </div>
    </div>
 </li>
DELIMETER;
echo $books;
}
}


/**************** get book by search key and category ********************/
function get_all_books_by_search_key($key){

$query = query("SELECT * FROM bookads where title LIKE '%$key%' OR author LIKE'%$key%' OR category LIKE '%$key%' 
  OR sub_category LIKE '%$key%' order by adno DESC");
confirm($query);
while($row = fetch_array($query)) {
  // short description
$adno = $row['adno'];
// for getting the book for loggedin user and normal user
$image_path = $row['ad_image'];
if(!logged_in_check()){
  $image_path = "admin/".$row['ad_image'];
}
$description = strip_tags($row['book_description']);
if (strlen($description) > 230) {
    // truncate string
    $stringCut = substr($description, 0, 230);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $description = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
    $description .= '... <a href="single-page-listing.php?adno='.$adno.'">Read More</a>';
}
if(!strcasecmp($row['adtype'],"Rent")){
  $price = $row['rent_price'];
  $rent_type = $row['rent_type'];
  $security_money = $row['security_money'];
  $security_money = $row['orginal_price'];
  $extra = '/';
} else{
  $price = $row['selling_price'];
  $rent_type = '';
  $security_money = '';
  $security_money = '';
  $extra = '';
}

$books = <<<DELIMETER
  <li>
    <div class="well ad-listing clearfix">
       <div class="col-md-2 col-sm-5 col-xs-12 grid-style no-padding">
          <!-- Image Box -->
          <div class="img-box">
             <img src={$image_path} class="img-responsive" style="width: auto; height: 220px; align-content: center; margin-left: auto;
  margin-right: auto;" alt="">
             <div onclick="detailsmodal($adno)" class="quick-view"> <a href="" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
          </div>
          <!-- Ad Type -->
          <span class="ad-status"> {$row['adtype']} </span>
          <!-- User Preview -->
          <div class="user-preview">
             <a href="#"> <img src={$image_path} class="avatar avatar-small" alt=""> </a>
          </div>
       </div>
       <div class="col-md-10 col-sm-7 col-xs-12">
          <!-- Ad Content-->
          <div class="row">
             <div class="content-area">
                <div class="col-md-9 col-sm-12 col-xs-12">
                   <!-- Ad Title -->
                   <h3><a href="single-page-listing.php?adno={$adno}"> {$row['title']} </a></h3>
                   <!-- Writer Name -->
                   <div class="writer-name"> <span><strong>{$row['author']}</strong></span> </div>
                   <!-- Info Icons -->
                   <!-- Ad Meta Info -->
                   <ul class="ad-meta-info">
                      <li> <i class="fa fa-map-marker"></i><a href="#">{$row['address']}</a> </li>
                      <li> <i class="fa fa-clock-o"></i>{$row['postedon']} </li>
                   </ul>
                   <!-- Ad Description-->
                   <div class="ad-details">
                      <p>{$description}</p>
                   </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12">
                   <!-- Ad Stats -->
                   <div class="short-info">
                      <div class="ad-stats hidden-xs"><span>Caegory  : </span>{$row['category']}</div>
                      <div class="ad-stats hidden-xs"><span>Sub Category : </span>{$row['sub_category']}</div>
                      <div class="ad-stats hidden-xs"><span>Book Condition : </span>{$row['book_condition']}</div>
                   </div>
                   <!-- Price -->
                   <div class="price"> <span>BDT {$price} {$extra} {$rent_type}</span> </div>
                   <!-- Ad View Button -->
                   <a href="single-page-listing.php?adno={$adno}" class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</a>
                </div>
             </div>
          </div>
          <!-- Ad Content End -->
       </div>
    </div>
 </li>
DELIMETER;
echo $books;
}
}


/**************** get book by search key and category ********************/
function get_all_books_by_search_key_and_category($key,$category){

$query = query("SELECT * FROM bookads where category='$category' AND (title LIKE '%$key%' OR author LIKE'%$key%' 
  OR sub_category LIKE '%$key%') order by adno DESC");
confirm($query);
while($row = fetch_array($query)) {
  // short description
$adno = $row['adno'];
// for getting the book for loggedin user and normal user
$image_path = $row['ad_image'];
if(!logged_in_check()){
  $image_path = "admin/".$row['ad_image'];
}
$description = strip_tags($row['book_description']);
if (strlen($description) > 230) {
    // truncate string
    $stringCut = substr($description, 0, 230);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $description = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
    $description .= '... <a href="single-page-listing.php?adno='.$adno.'">Read More</a>';
}
if(!strcasecmp($row['adtype'],"Rent")){
  $price = $row['rent_price'];
  $rent_type = $row['rent_type'];
  $security_money = $row['security_money'];
  $security_money = $row['orginal_price'];
  $extra = '/';
} else{
  $price = $row['selling_price'];
  $rent_type = '';
  $security_money = '';
  $security_money = '';
  $extra = '';
}

$books = <<<DELIMETER
  <li>
    <div class="well ad-listing clearfix">
       <div class="col-md-2 col-sm-5 col-xs-12 grid-style no-padding">
          <!-- Image Box -->
          <div class="img-box">
             <img src={$image_path} class="img-responsive" style="width: auto; height: 220px; align-content: center; margin-left: auto;
  margin-right: auto;" alt="">
             <div onclick="detailsmodal($adno)" class="quick-view"> <a href="" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
          </div>
          <!-- Ad Type -->
          <span class="ad-status"> {$row['adtype']} </span>
          <!-- User Preview -->
          <div class="user-preview">
             <a href="#"> <img src={$image_path} class="avatar avatar-small" alt=""> </a>
          </div>
       </div>
       <div class="col-md-10 col-sm-7 col-xs-12">
          <!-- Ad Content-->
          <div class="row">
             <div class="content-area">
                <div class="col-md-9 col-sm-12 col-xs-12">
                   <!-- Ad Title -->
                   <h3><a href="single-page-listing.php?adno={$adno}"> {$row['title']} </a></h3>
                   <!-- Writer Name -->
                   <div class="writer-name"> <span><strong>{$row['author']}</strong></span> </div>
                   <!-- Info Icons -->
                   <!-- Ad Meta Info -->
                   <ul class="ad-meta-info">
                      <li> <i class="fa fa-map-marker"></i><a href="#">{$row['address']}</a> </li>
                      <li> <i class="fa fa-clock-o"></i>{$row['postedon']} </li>
                   </ul>
                   <!-- Ad Description-->
                   <div class="ad-details">
                      <p>{$description}</p>
                   </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12">
                   <!-- Ad Stats -->
                   <div class="short-info">
                      <div class="ad-stats hidden-xs"><span>Caegory  : </span>{$row['category']}</div>
                      <div class="ad-stats hidden-xs"><span>Sub Category : </span>{$row['sub_category']}</div>
                      <div class="ad-stats hidden-xs"><span>Book Condition : </span>{$row['book_condition']}</div>
                   </div>
                   <!-- Price -->
                   <div class="price"> <span>BDT {$price} {$extra} {$rent_type}</span> </div>
                   <!-- Ad View Button -->
                   <a href="single-page-listing.php?adno={$adno}" class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</a>
                </div>
             </div>
          </div>
          <!-- Ad Content End -->
       </div>
    </div>
 </li>
DELIMETER;
echo $books;
}
}


/************* Single item pop up in index.php ************/


function show_details_modal($adno){
$query = query("SELECT * FROM bookads where adno = '$adno'");
confirm($query);
if(row_count($query) == 1){
      $bookad = fetch_array($query);
      return $bookad;
    }
  }


  function getAllCategory(){

    $query = query("SELECT * FROM book_category order by category_name");
confirm($query);
while($row = fetch_array($query)) {
$sum_of_books = get_total_sum_of_book_by_category($row['category_name']);
  $category = <<<DELIMETER
<a href="category-listing.php">
         <div class="col-md-3 col-xs-12 col-sm-6">
            <div class="box">
               <img alt="img" src="images/category/cars.png">
               <h4><a href="category-listing.php">{$row['category_name']}</a></h4>
               <strong>{$sum_of_books} books</strong> 
            </div>
         </div>
      </a>
DELIMETER;
echo $category;
  }
}

function get_total_sum_of_book_by_category($category_name){
$query = query("SELECT count(adno) as total FROM bookads WHERE category = '$category_name'");
confirm($query);
$row = fetch_array($query);
$sum_of_books = $row['total'];
return $sum_of_books;
}


function get_book_details_by_adno($adno){
$query = query("SELECT * FROM bookads WHERE adno = '$adno'");
confirm($query);
$row = fetch_array($query);
return $row;
}


function show_all_subcategory_in_category_listing_by_category($category)
{
$query = query("SELECT * FROM book_sub_category where category_name='$category' order by sub_category_name");
confirm($query);
while($row = fetch_array($query)) {
$sub_category = <<<DELIMETER
<li>
 <a href="category-listing.php?category={$category}&sub={$row['sub_category_name']}">{$row['sub_category_name']}</a> 
</li>
DELIMETER;
echo $sub_category;
  }
}


function add_book(){
  if($_SERVER['REQUEST_METHOD'] == "POST"){

$book_category            = escape($_POST['book_category']);
$book_subcategory         = escape($_POST['book_subcategory']);
$book_title               = escape($_POST['book_title']);
$book_authorName          = escape($_POST['book_authorName']);
$book_editionNo           = escape($_POST['book_editionNo']);
$book_isbn                = escape($_POST['book_isbn']);
$book_adtype              = escape($_POST['book_adtype']);
$book_sell_price          = escape($_POST['book_sell_price']);
$book_rent_price          = escape($_POST['book_rent_price']);
$book_rent_type           = escape($_POST['book_rent_type']);
$book_securityMoney       = escape($_POST['book_securityMoney']);
$book_originalBookPrice   = escape($_POST['book_originalBookPrice']);
$book_image               = $_FILES['file']['name'];
$book_tmp_image           = $_FILES['file']['tmp_name'];
$book_desc                = escape($_POST['book_desc']);
$book_tags                = escape($_POST['book_tags']);
$conditions               = escape($_POST['conditions']);
$user_name                = escape($_POST['user_name']);
$user_email               = escape($_POST['user_email']);
$user_phone               = escape($_POST['user_phone']);
$user_address             = escape($_POST['user_address']);

$book_category             =get_category_name_by_category_id($book_category );

$postedon                 = date("Y-m-d H:i:s");
$status                   = "active";
$image_path               = "uploads/books/".$book_image;


move_uploaded_file($book_tmp_image, SITE_ROOT . DS . $book_image);

$query = query("INSERT INTO bookads(adno,category,sub_category,title,author,edition_no,isbn,adtype,selling_price,rent_price,rent_type,security_money,orginal_price,ad_image,book_description,book_tags,book_condition,name,email,mobile,address,postedon,status) values(0,'$book_category','$book_subcategory','$book_title','$book_authorName','$book_editionNo','$book_isbn','$book_adtype','$book_sell_price','$book_rent_price','$book_rent_type','$book_securityMoney','$book_originalBookPrice','$image_path','$book_desc','$book_tags','$conditions','$user_name','$user_email','$user_phone','$user_address','$postedon','$status')");
$last_id = last_id();
confirm($query); 
set_message("New added with id {$last_id}");
  }
}


function get_category_name_by_category_id($id){
$query = query("SELECT * FROM book_category where cat_id = $id");
confirm($query);
$row = fetch_array($query);
$category_name = $row['category_name'];
return $category_name;
  }


  function get_book_info_by_adno($adno){

$query = query("SELECT * FROM bookads where adno = $adno");
confirm($query);
$row = fetch_array($query);

return $row;
  }

/************** Get total no of ad provided by user *************/

function get_total_book_ads_provided_by_user_email($email){

  $query = query("SELECT COUNT(adno) AS total FROM bookads where email='$email'");
confirm($query);
$row = fetch_array($query);
$sum_of_adds = $row['total'];
return $sum_of_adds;
  }


  /***************** Get total favourite ads of user ******************/
function get_total_favourite_ads_by_user_email($email){

$query = query("SELECT COUNT(fav_adno) AS total FROM user_favourites where email='$email'");
confirm($query);
$row = fetch_array($query);
$sum_of_adds = $row['total'];
return $sum_of_adds;
  }


  /************* Get all book by category and subcategory*********/
function get_all_books_by_category_and_subcategory($category,$sub_category){
$query = query("SELECT * FROM bookads where category='$category' AND sub_category='$sub_category' order by adno DESC");
confirm($query);
while($row = fetch_array($query)) {
  // short description
$adno = $row['adno'];
// for getting the book for loggedin user and normal user
$image_path = $row['ad_image'];
if(!logged_in_check()){
  $image_path = "admin/".$row['ad_image'];
}
$description = strip_tags($row['book_description']);
if (strlen($description) > 230) {
    // truncate string
    $stringCut = substr($description, 0, 230);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $description = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
    $description .= '... <a href="single-page-listing.php?adno='.$adno.'">Read More</a>';
}
if(!strcasecmp($row['adtype'],"Rent")){
  $price = $row['rent_price'];
  $rent_type = $row['rent_type'];
  $security_money = $row['security_money'];
  $security_money = $row['orginal_price'];
  $extra = '/';
} else{
  $price = $row['selling_price'];
  $rent_type = '';
  $security_money = '';
  $security_money = '';
  $extra = '';
}

$books = <<<DELIMETER
  <div class="item col-md-6 col-sm-6 col-xs-12 clearfix">
     <div class="category-grid-box-1">
        <!-- Image Box -->
        <div class="image">
           <img alt="Tour Package" src="{$image_path}" class="img-responsive" style="width: auto; height: 220px; align-content: center; margin-left: auto;
  margin-right: auto;">
           <div class="price-tag">
              <div class="price"><span>BDT {$price} {$extra} {$rent_type}</span></div>
           </div>
        </div>
        <!-- Short Description -->
        <div class="short-description-1 clearfix">
           <!-- Category Title -->
           <div class="category-title"> <span><a href="">{$row['adtype']}</a></span> </div>
           <!-- Ad Title -->
           <h3><a title="" href="single-page-listing.php?adno={$adno}">{$row['title']}</a></h3>
           <!-- Short Description -->
           <p class="list-group-item-text">{$description}</p>
           <!-- Ad Meta Info -->
           <ul class="ad-meta-info">
              <li>
                 <a href="#" data-toggle="tooltip" title="Author"> <i class="flaticon-ribbon-badge"></i>{$row['author']}</a>
              </li>
              <li> <a href="#" data-toggle="tooltip" title="Condition"><i class="flaticon-check-square"></i>{$row['book_condition']}</a> </li>
           </ul>
        </div>
        <!-- Ad Meta Stats -->
        <div class="ad-info-1">
           <ul>
              <li> <i class="fa fa-map-marker"></i><a href="">{$row['address']}</a> </li>
              <li> <i class="fa fa-clock-o"></i>1{$row['postedon']} </li>
           </ul>
           <!-- View All Button -->
           <div class="detail-button"> <a href="single-page-listing.php?adno={$adno}">View Details</a> </div>
        </div>
     </div>
  </div>
DELIMETER;
echo $books;
}
}

/**************** Get all book adds by user email **********************/

function get_all_book_ads_by_user_email($email){
    $query = query("SELECT * FROM bookads where email='$email' order by adno DESC");
confirm($query);
while($row = fetch_array($query)) {
  // short description
$adno = $row['adno'];
// for getting the book for loggedin user and normal user
$image_path = $row['ad_image'];
if(!logged_in_check()){
  $image_path = "admin/".$row['ad_image'];
}
$description = strip_tags($row['book_description']);
if (strlen($description) > 230) {
    // truncate string
    $stringCut = substr($description, 0, 230);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $description = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
    $description .= '... <a href="single-page-listing.php?adno='.$adno.'">Read More</a>';
}
if(!strcasecmp($row['adtype'],"Rent")){
  $price = $row['rent_price'];
  $rent_type = $row['rent_type'];
  $security_money = $row['security_money'];
  $security_money = $row['orginal_price'];
  $extra = '/';
} else{
  $price = $row['selling_price'];
  $rent_type = '';
  $security_money = '';
  $security_money = '';
  $extra = '';
}

$books = <<<DELIMETER
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12  ">
     <div class="white category-grid-box-1 ">
        <!-- Image Box -->
        <div class="image"> <img alt="Ad Image" src="{$row['ad_image']}" class="img-responsive" style="width: auto; height: 250px; align-content: center; margin-left: auto;
  margin-right: auto;"> </div>
        <!-- Short Description -->
        <div class="short-description-1 ">
           <!-- Category Title -->
           <div class="category-title"> <span><a href="">{$row['adtype']}</a></span> </div>
           <!-- Ad Title -->
           <h3>
              <a title="" href="single-page-listing.php?{$adno}">{$row['title']}</a>
           </h3>
           <!-- Location -->
           <p class="location"><i class="fa fa-map-marker"></i> Houghton Street London</p>
           <!-- Rating -->
           <div class="rating">
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(2)</span>

           </div>
           <!-- Price --><span class="ad-price">BDT {$price} {$extra} {$rent_type}</span> 
        </div>
        <!-- Ad Meta Stats -->
        <div class="ad-info-1">
           <ul class="pull-left">
              <li> <i class="fa fa-eye"></i><a href="#">445 Views</a> </li>
              <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
           </ul>
           <ul class="pull-right">
              <li> <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit this Ad" href="#"><i class="fa fa-pencil edit"></i></a> </li>
              <li> <a  onclick="deleteFromMyAds({$adno})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Ad"><i class="fa fa-times delete"></i></a></li>
           </ul>
        </div>
     </div>
  </div>
DELIMETER;
echo $books;
}
  }

  /************* Get all book by category and subcategory*********/

function get_all_favourite_adds_user_email($email){
$query = query("SELECT * FROM user_favourites where email = '$email' order by fav_adno DESC");
confirm($query);
while($result = fetch_array($query)) {
  // short description
$current_adno = $result['fav_adno'];

$row = get_book_details_by_adno($current_adno);
// for getting the book for loggedin user and normal user
$adno = $row['adno'];
$image_path = $row['ad_image'];
if(!logged_in_check()){
  $image_path = "admin/".$row['ad_image'];
}
if(!strcasecmp($row['adtype'],"Rent")){
  $price = $row['rent_price'];
  $rent_type = $row['rent_type'];
  $security_money = $row['security_money'];
  $security_money = $row['orginal_price'];
  $extra = '/';
} else{
  $price = $row['selling_price'];
  $rent_type = '';
  $security_money = '';
  $security_money = '';
  $extra = '';
}

$books = <<<DELIMETER
  <div class="ads-list-archive">
    <!-- Image Block -->
    <div class="col-lg-2 col-md-2 col-sm-3 no-padding">
       <!-- Img Block -->
       <div class="ad-archive-img">
          <a href="">
             <img src="{$row['ad_image']}" alt="" style="width: auto; height: 125px; align-content: center; margin-left: auto;
  margin-right: auto;">
          </a>
       </div>
       <!-- Img Block -->   
    </div>
    <!-- Ads Listing -->    
    <div class="clearfix visible-xs-block"></div>
    <!-- Content Block -->     
    <div class="col-lg-10 col-md-10 col-sm-9 no-padding">
       <!-- Ad Desc -->     
       <div class="ad-archive-desc">
          <!-- Price -->    
          <div class="ad-price">BDT {$price} {$extra} {$rent_type}</div>
          <!-- Title -->    
          <h3><a href="single-page-listing.php?adno={$adno}"> {$row['title']} </a></h3>
          <!-- Category -->
          <div class="category-title"> <span><a href="category-listing.php?category={$row['category']}&sub={$row['sub_category']}">{$row['sub_category']}</a></span> </div>
          <!-- Short Description -->
          <div class="clearfix visible-xs-block"></div>
          <!-- Ad Features -->
          <!-- Ad History -->
          <div class="clearfix archive-history">
             <div class="last-updated">Updated: 1 day ago</div>
             <div class="ad-meta">
                <a onclick="deleteFromFavourite({$adno})" class="btn save-ad"><i class="fa fa-minus-circle"></i> unfavourite</a>
                <a class="btn btn-success" href="single-page-listing.php?adno={$adno}"><i class="fa fa-eye"></i> View Details</a>
             </div>
          </div>
       </div>
       <!-- Ad Desc End -->     
    </div>
    <!-- Content Block End --> 
  </div>
DELIMETER;
echo $books;
}
}



/***************** Add book to favourite list *****************/
function add_book_to_favourite_list($adno,$user_email)
{
  if(!favourite_exists($adno,$user_email)){
  $sql = "INSERT INTO user_favourites(email,fav_adno)";
  $sql.= "VALUES('$user_email','$adno')";
  $result = query($sql);
  confirm($result);
  echo "Added To Favourites";
 } else{
  echo "Already in Favourites";
 }
}

function favourite_exists($adno,$user_email){
  $sql = "SELECT * FROM user_favourites WHERE email = '$user_email' AND fav_adno = '$adno'";
  $result = query($sql);
  confirm($result);
  if(row_count($result) == 1){
    return true;
  }else{
    return false;
  }
}

function delete_ads_from_bookads_by_adno_and_email($adno,$user_email){
  $sql = "DELETE FROM bookads WHERE email = '$user_email' AND adno = '$adno'";
  $result = query($sql);
  confirm($result);
}

function delete_ads_from_favourites_by_adno_and_email($adno,$user_email){
  $sql = "DELETE FROM user_favourites WHERE email = '$user_email' AND fav_adno = '$adno'";
  $result = query($sql);
  confirm($result);
}

/*****************************************/

function get_all_related_ad_by_category($category,$adno){

$query = query("SELECT * FROM bookads where category = '$category' AND adno != '$adno' order by postedon DESC");
confirm($query);
while($row = fetch_array($query)) {
  // short description
$adno = $row['adno'];
// for getting the book for loggedin user and normal user
$image_path = $row['ad_image'];
if(!logged_in_check()){
  $image_path = "admin/".$row['ad_image'];
}
$description = strip_tags($row['book_description']);
if (strlen($description) > 230) {
    // truncate string
    $stringCut = substr($description, 0, 230);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $description = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
    $description .= '... <a href="single-page-listing.php?adno='.$adno.'">Read More</a>';
}
if(!strcasecmp($row['adtype'],"Rent")){
  $price = $row['rent_price'];
  $rent_type = $row['rent_type'];
  $security_money = $row['security_money'];
  $security_money = $row['orginal_price'];
  $extra = '/';
} else{
  $price = $row['selling_price'];
  $rent_type = '';
  $security_money = '';
  $security_money = '';
  $extra = '';
}

$books = <<<DELIMETER
 <div class="ads-list-archive">
    <!-- Image Block -->
    <div class="col-lg-3 col-md-5 col-sm-5 no-padding">
       <!-- Img Block -->
       <div class="ad-archive-img" style="width: auto; height: 225px; align-content: center; margin-left: auto;
  margin-right: auto;>
          <a href="#">
             <img class="img-responsive" src="{$image_path}" alt="" > 
          </a>
       </div>
       <!-- Img Block -->
    </div>
    <!-- Ads Listing -->
    <div class="clearfix visible-xs-block"></div>
    <!-- Content Block -->
    <div class="col-lg-9 col-md-7 col-sm-7 no-padding">
       <!-- Ad Desc -->
       <div class="ad-archive-desc">
          <!-- Price -->
          <div class="ad-price">BDT {$price} {$extra} {$rent_type}</div>
          <!-- Title -->
          <h3>{$row['title']}</h3>
          <!-- Category -->
          <div class="category-title"> <span><a href="category-listing.php?category={$row['category']}&sub={$row['sub_category']}">{$row['sub_category']}</a></span> </div>
          <!-- Short Description -->
          <div class="clearfix visible-xs-block"></div>
          <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
          <!-- Ad Features -->
          <ul class="add_info">
             <!-- Contact Details -->
             <li>
                <div class="custom-tooltip tooltip-effect-4">
                   <span class="tooltip-item"><i class="fa fa-phone"></i></span>
                   <div class="tooltip-content">
                      <h4>Call Timings</h4>
                      <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                      <br> <strong>Saturday</strong> 09.00 AM - 5.30 PM
                      <br> <strong>Sunday</strong> <span class="label label-success">+92-123-4567</span> 
                   </div>
                </div>
             </li>
             <!-- Address -->
             <li>
                <div class="custom-tooltip tooltip-effect-4">
                   <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                   <div class="tooltip-content">
                      <h4>Address</h4>
                      Musee du Louvre, 75058 Paris - France 
                   </div>
                </div>
             </li>
             <!-- Ad Type -->
             <li>
                <div class="custom-tooltip tooltip-effect-4">
                   <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                   <div class="tooltip-content"> <strong>Condition</strong> <span class="label label-danger">Used</span> </div>
                </div>
             </li>
             <!-- Ad Type -->
             <li>
                <div class="custom-tooltip tooltip-effect-4">
                   <span class="tooltip-item"><i class="fa fa-check-square-o"></i></span>
                   <div class="tooltip-content"> <strong>Warrinty</strong> <span class="label label-danger">No </span> </div>
                </div>
             </li>
          </ul>
          <!-- Ad History -->
          <div class="clearfix archive-history">
             <div class="last-updated">Last Updated: 1 day ago</div>
             <div class="ad-meta"> <a class="btn btn-success"><i class="fa fa-eye"></i> View Details</a> </div>
          </div>
       </div>
       <!-- Ad Desc End -->
    </div>
    <!-- Content Block End -->
 </div>
DELIMETER;
echo $books;
}
}




/************* Get recent adds of book *********/
function get_all__recent_books(){
$query = query("SELECT * FROM bookads order by adno DESC LIMIT 4");
confirm($query);
while($row = fetch_array($query)) {
  // short description
$adno = $row['adno'];
// for getting the book for loggedin user and normal user
$image_path = $row['ad_image'];
if(!logged_in_check()){
  $image_path = "admin/".$row['ad_image'];
}
$description = strip_tags($row['book_description']);
if (strlen($description) > 230) {
    // truncate string
    $stringCut = substr($description, 0, 230);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $description = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
    $description .= '... <a href="single-page-listing.php?adno='.$adno.'">Read More</a>';
}
if(!strcasecmp($row['adtype'],"Rent")){
  $price = $row['rent_price'];
  $rent_type = $row['rent_type'];
  $security_money = $row['security_money'];
  $security_money = $row['orginal_price'];
  $extra = '/';
} else{
  $price = $row['selling_price'];
  $rent_type = '';
  $security_money = '';
  $security_money = '';
  $extra = '';
}

$books = <<<DELIMETER
 <div class="recent-ads-list">
    <div class="recent-ads-container">
       <div class="recent-ads-list-image">
          <a href="#" class="recent-ads-list-image-inner">
             <img src="$image_path" alt="" >
          </a><!-- /.recent-ads-list-image-inner -->
       </div>
       <!-- /.recent-ads-list-image -->
       <div class="recent-ads-list-content">
          <h3 class="recent-ads-list-title">
             <a href="single-page-listing.php?adno={$row['adno']}">{$row['title']}</a>
          </h3>
          <ul class="recent-ads-list-location">
             <li><a href="#">{$row['sub_category']}</a></li>
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
DELIMETER;
echo $books;
}
}



?>