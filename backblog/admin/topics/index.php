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

  <title>Admin Section - Manage Topics</title>
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

          <h2 class="page-title">Manage Topics</h2>

           <?php include(ROOT_PATH . "/app/Includes/messages.php"); ?>

          <table>
            <thead>
              <th>SN</th>
              <th>Name</th>
              <th colspan="2">Action</th>
            </thead>
            <tbody>
              <?php foreach ($topics as $key => $topic): ?>
                <tr>
                  <td><?php echo $key * 1; ?></td>
                  <td><?php echo $topic['name']; ?></td>
                  <td><a href="edit.php?id=<?php echo $topic['id'] ?>" class="edit">Edit</a></td>
                  <td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">Delete</a></td>
                </tr>
              <?php endforeach; ?>
              
            </tbody>
          </table>
          
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
