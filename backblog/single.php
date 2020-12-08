<?php include('path.php'); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php'); 

if (isset($_GET['id'])) {
$post = selectone('posts', ['id' => $_GET['id']]);
}
$topics = selectall('topics');
$posts = selectall('posts', ['published'] === 1); 

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
	<link rel="stylesheet" href="assets/css/style.css">

	<title><?php echo $post['title']; ?> | DailyInspiration</title>
</head>

<body>
	
     <?php include(ROOT_PATH . "/app/Includes/header.php"); ?>

   <!-- Page Wrapper -->
   <div class="page-wrapper">
     
       <!-- Content ---->
       <div class="content clearfix">

         <!-- MAIN CONTENT -->
        <div class="main-content-wrapper">
         <div class="main-content single">
          <h1 class="post-title"><?php echo $post['title']; ?></h1>

          <div class="post-content">
            <?php echo html_entity_decode($post['body']); ?>
          </div>
            
         </div>
        </div>

      <!---- //Main Content -->

      <!-- Sidebar -->
         
         <div class="sidebar single">

          <div class="section popular">
            <h2 class="section-title">Popular Posts</h2>

            <?php foreach ($posts as $p): ?>
              <div class="post clearfix">
                <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                <a href="" class="title">
                  <h4><?php echo $p['title']; ?></h4></a>
              </div>
             
             <?php endforeach; ?> 
            
            
          </div>
         
            <div class="section topics">
              <h2 class="section-title">Topics</h2>
              <ul>
                <?php foreach ($topics as $topic): ?>
                <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>

              <?php endforeach; ?>
                
              </ul>  
            </div>


         </div>

      </div>
   </div>

   <!--- //Sidebar //---->

   <!-- //Page Wrapper -->


   <!--- Footer --->
   
   <?php include(ROOT_PATH . "/app/Includes/footer.php"); ?>

   <!--- Footer --->


   <!-- JQuery -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>


   <!-- Slick jS Carousel -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous"></script>


   <!-- Custom Script -->
   <script src="assets/js/scripts.js"></script>js
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>


</html>