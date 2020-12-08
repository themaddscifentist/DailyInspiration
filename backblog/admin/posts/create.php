<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
adminonly();
?>
<!DOCTYPE html>
<html lan="eng">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">

  <!------ Font Awesome -------->
  <script src="https://kit.fontawesome.com/c263f93149.js" crossorigin="anonymous"></script>


    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet"> 

  <!--Custom Styling with CSS--->
  <link rel="stylesheet" href="../../assets/css/style.css">

  <!--Admin Styling-->
  <link rel="stylesheet" href="../../assets/css/admin.css">

  <title>Admin Section - Add Post</title>
</head>

<body>
   
<?php include(ROOT_PATH . "/app/Includes/adminheader.php"); ?>

   <!--Admin Page Wrapper -->
   <div class="admin-wrapper">

<?php include(ROOT_PATH . "/app/Includes/adminsidebar.php"); ?>

       <!--- Admin Content ------>
      <div class="admin-content">
        <div class="button-group">
          <a href="create.php" class="btn btn-big">Add Post</a>
          <a href="index.php" class="btn btn-big">Manage Posts</a>
        </div>

        <div class="content">

          <h2 class="page-title">Add Post</h2>

          <?php include(ROOT_PATH . '/app/Helpers/formerrors.php'); ?>

          <form action="create.php" method="post" enctype="multipart/form-data">
            <div>
              <label>Title</label>
              <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
            </div>
            <div>
              <label>Body</label>
              <textarea name="body" id="body"><?php echo $body ?></textarea>
            </div>
            <div>
              <label>Image</label>
              <input type="file" name="image" class="text-input">
            </div>
            <div>
              <label>Topic</label>
              <select name="topic_id" class="text-input">
                <option value=""></option>
                
                <?php foreach ($topics as $key => $topic): ?>
                  <?php if (!empty($topic_id) && $topic_id == $topic['id'] ): ?>
                    <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                <?php else:?>
                    <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                <?php endif; ?>
                
                
                
                <?php endforeach; ?>

              </select>
            </div>
            <div>
              <?php if (empty($published)): ?>
                <label>
                  <input type="checkbox" name="published">
                  Publish
                </label>
              <?php else: ?>
                  <label>
                  <input type="checkbox" name="published" checked>
                  Publish
                </label>
              <?php endif; ?>
            </div>
            <div>
              <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
            </div>

          </form>
          
        </div>

      </div>  


       <!---// Admin Content////---->
       </div>   
 <!--- Footer --->

   <!-- JQuery -->
   <script 
   src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>

   <!---- CKEditor ----->
   <script 
    src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>

   <!-- Custom Script -->
   <script src="../../assets/js/scripts.js"></script>
   
</body>


</html>
