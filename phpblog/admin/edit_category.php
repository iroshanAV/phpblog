<?php
include "../libs/config.php";
include "../libs/database.php";
include "../functions.php";

$db = new database();

$id= $_GET['id'];
$query ="SELECT * FROM categories WHERE id='$id'";
$cats = $db->select($query);
$single = $cats->fetch_array();




//update posts
if(isset($_POST['update'])){
	//creating variables for text
	$title =$_POST['title'];
	
	
	
	if($title == '' ){
		echo  "Please enter category";
	}else{
		$query ="UPDATE categories SET title='$title' WHERE id='$id'";
	     $run = $db -> update($query);
		 
	}
	
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="../styles/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../styles/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../styles/custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">Dashboard</a>
          <a class="blog-nav-item" href="add_post.php">Add New Post</a>
          <a class="blog-nav-item" href="add_category.php">Add New Category</a>
		    <a class="blog-nav-item pull-right" href="logout.php">Logout</a>
          <a class="blog-nav-item pull-right" href="../index.php">View Blog</a>
		  
        
        </nav>
      </div>
    </div>

    <div class="container">

     

      <div class="row">

        <div class="col-sm-12 blog-main">
		
        <br>
		
		
        <form action="edit_category.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label >Category Title : </label>
    <input type="text"  name="title" class="form-control" value="<?php echo $single['title'];?>" placeholder="Email">
  </div>
  
  
  
 
  <button type="submit" name="update" class="btn btn-default">Update</button>
  <a href="index.php" class="btn btn-success">Cancel </a>
    <a href="delete_cat.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete </a>

</form>
		
		
		

		
        </div><!-- /.blog-main -->
		<?php include "includes/footer.php"; ?>