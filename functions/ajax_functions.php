<?php 


$con=mysqli_connect("localhost","root","","bookshare");
  // Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  die();
}

if(isset($_POST['category_id'])) {
  global $con;
  $sql = "select * from book_sub_category where category_id=".mysqli_real_escape_string($con,$_POST['category_id'])." order by id";
  $result = mysqli_query($con, $sql);
  if(mysqli_num_rows($result) > 0) {
    echo '<option value="">Select an option</option>';
    while($row = mysqli_fetch_object($result)) {
      echo '<option value="'.$row->sub_category_name.'">'.$row->sub_category_name.'</option>';
    }
  } else {
    echo '<option value="">No Record</option>';
  }
}


?>