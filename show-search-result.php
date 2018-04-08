<?php 

require_once 'functions/init.php';
$key = $_POST['key'];
$category = $_POST['category'];

if(!empty($category)){
	$category_name = get_category_name_by_category_id($category);
// echo $category_name;
	if (!empty($category_name)) {
		get_all_books_by_search_key_and_category($key,$category_name);
	// echo "in if";
	} 
} else{
	$books = get_all_books_by_search_key($key);
	// echo "in else";
}

?>