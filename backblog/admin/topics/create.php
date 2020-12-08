<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); 
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

  <title>Admin Section - Add Topics</title>
</head>

<body>
   
<?php include(ROOT_PATH . "/app/Includes/adminheader.php"); ?>

   <!--Admin Page Wrapper -->
   <div class="admin-wrapper">

<?php include(ROOT_PATH . "/app/Includes/adminsidebar.php"); ?>

       <!--- Admin Content ------>
      <div class="admin-content">
        <div class="button-group">
          <a href="create.php" class="btn btn-big">Add Topic</a>
          <a href="index.php" class="btn btn-big">Manage Topics</a>
        </div>

        <div class="content">

          <h2 class="page-title">Add Topic</h2>
          <?php include(ROOT_PATH . "/app/Helpers/formerrors.php"); ?> 

          <form action="create.php" method="post">
            <div>
              <label>Name</label>
              <input type="text" name="name" value="<?php echo $name ?>" class="text-input">
            </div>
            <div>
              <label>Description</label>
              <textarea name="description" id="body"><?php echo $description ?></textarea>
            </div>
            
            <div>
              <button type="submit" name="add-topic" class="btn btn-big">Add Topic</button>
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
