<?php
$db = new database();
$query= "SELECT * FROM categories ";
$cats = $db->select($query);
?>
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4 class="head">About</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
          <div class="sidebar-module">
            <h4 class="head">Categories</h4>
            <ol class="list-unstyled">
			<?php while($row = $cats->fetch_array()) : ?>
              <li><a href="category.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></li>
            <?php endwhile; ?>               
            </ol>
          </div>
         
        </div><!-- /.blog-sidebar -->
