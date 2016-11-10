<?php
include "../libs/config.php";
include "../libs/database.php";
include "../functions.php";

$db = new database();

$id= $_GET['id'];
$query ="SELECT * FROM posts WHERE id='$id'";
$posts = $db->select($query);
$single = $posts->fetch_array();



$query ="SELECT * FROM categories";
$cats = $db->select($query);

//update posts
if(isset($_POST['update'])){
	$title =$_POST['title'];
	$content =$_POST['content'];
	$cat =$_POST['cat'];
	$author =$_POST['author'];
	$tags =$_POST['tags'];
	
	
	//creating variables for images
	$image = $_FILES['image']['name'];
	$image_tmp = $_FILES['image']['tmp_name'];
	
	if($title == '' || $content == '' || $cat =='' || $author =='' || $tags =='' ){
		echo  "Please fill all the fields";
	}else{
		move_uploaded_file($image_tmp,"../images/$image");
		$query ="UPDATE posts SET category_id='$cat',title='$title',content='$content',author='$author',image='$image',tags='$tags' WHERE id='$id'";
	     $run = $db -> update($query);
		 
		 unlink("../images/".$single['image']);
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
		
		
        <form action="edit_post.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label >Post Title : </label>
    <input type="text"  name="title" class="form-control" value="<?php echo $single['title'];?>" placeholder="Email">
  </div>
  
  <div class="form-group">
  <label>Post Content </label>
  <textarea class="form-control" name="content" placeholder="Enter the content" rows="3">
  <?php echo $single['content']; ?>
  </textarea>
  </div>
  
  <select name ="cat" class="form-control">
    <option>Select a category</option>
	<?php while($row= $cats->fetch_array()) :?>
	    <option value="<?php echo $row['id']; ?>"><?php echo $row['title'] ?></option>
	<?php endwhile;?>	
  </select>
  
  
  <div class="form-group">
    <label >Author Name : </label>
    <input type="text" class="form-control"   value="<?php echo $single['author'];?>"  name ="author" placeholder="Enter Author name">
  </div>
  
  
  <div class="form-group">
    <label >Post Image : </label>
    <input type="file" name="image">
    <img src="../images/<?php echo $single['image'];?>" width="100" height="100" /> 
  </div>
  
  <div class="form-group">
    <label >Tags : </label>
    <input type="text" name="tags" value="<?php echo $single['tags'];?>"  class="form-control"  placeholder="Enter tags">
  </div>
  
  
 
  <button type="submit" name="update" class="btn btn-default">Update</button>
  <a href="index.php" class="btn btn-success">Cancel </a>
    <a href="delete_post.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete </a>

</form>
		
		
		

		
        </div><!-- /.blog-main -->
		<?php include "includes/footer.php"; ?>