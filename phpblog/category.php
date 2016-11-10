<?php
include "libs/config.php";
include "libs/database.php";
include "functions.php";

$id = $_GET['id'];

$db = new database();
$query= "SELECT * FROM posts WHERE category_id='$id'";
$posts = $db->select($query);
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

    <title>PHP Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="styles/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles/custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">Home</a>
          <a class="blog-nav-item" href="#">All Posts</a>
          <a class="blog-nav-item" href="#">Services</a>
          <a class="blog-nav-item" href="#">About</a>
          <a class="blog-nav-item" href="#">Contacts</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">PHP Blog</h1>
        <p class="lead blog-description">It's all about PHP</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

		<?php while($row = $posts->fetch_array()) :?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
            <p class="blog-post-meta"> on <?php echo formatDate($row['date']); ?> by <a href="#"><?php echo $row['author']; ?></a></p>
               <img style="float:left;margin-right:20px;margin-bottom:10px" src='images/<?php echo $row['image']; ?>'width="200" height="200">	
            <p style="text-align:justify"><?php echo substr($row['content'],0,300); ?></p>   
          	<a id="readmore" href="single_post.php?id=<?php echo $row['id']; ?> ">Read More </a> 
            
          </div><!-- /.blog-post -->
          <?php endwhile; ?>

        </div><!-- /.blog-main -->
		
		<?php
		include "includes/sidebar.php";
		include "includes/footer.php";
		?>