<?php
include "../libs/config.php";
include "../libs/database.php";
include "../functions.php";

$db = new database();
$query= "SELECT * FROM posts";
$posts = $db->select($query);

if(isset($_POST['submit'])){
	$cat =$_POST['title'];
	
	if($cat == '' ){
		echo  "Please fill all the fields";
	}else{
	
		$query ="INSERT INTO categories(title) VALUES('$cat')";
	     $run = $db -> insert($query);
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
		
		
        <form action="add_category.php" method="POST" >
  <div class="form-group">
    <label >Category Title : </label>
    <input type="text"  name="title" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  
 
  <button type="submit" name="submit" class="btn btn-success">Submit</button>
  <a href="index.php" class="btn btn-danger">Cancel </a>
</form>
		
		
		

		
        </div><!-- /.blog-main -->
		<?php include "includes/footer.php"; ?>