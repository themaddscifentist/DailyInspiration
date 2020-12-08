<?php 
include("path.php"); 
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$poststitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
   $posts = getpostsbytopicid($_GET['t_id']);
   $poststitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
   $poststitle = "You searched for '" . $_POST['search-term'] . "'";
   $posts = searchposts($_POST['search-term']);
} else {
   $posts = getpublishedposts();
}


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

	<title>EdRay's Blog!</title>
</head>

<body>
	 
   <?php include(ROOT_PATH . "/app/Includes/header.php"); ?>
   <?php include(ROOT_PATH . "/app/Includes/messages.php"); ?>
     
   <!-- Page Wrapper -->
   <div class="page-wrapper">
      <!-- Post Slider -->
       <div class="post-slider">
         <h1 class="slider-title">Now Trending</h1>
         <i class="fas fa-chevron-left prev"></i>
         <i class="fas fa-chevron-right next"></i>

         <div class="post-wrapper">
                        
            <?php foreach ($posts as $post): ?>
               <div class="post">
                  <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>"  alt="" class="slider-image">
                  <div class="post-info">
                  <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                  <i class="far fa-user"><?php echo $post['username']; ?></i>
                  &nbsp;
                  <i class="far fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
               </div>
            </div>

            <?php endforeach; ?>

            

         </div>
      </div>

       <!-- //Post Slider -->


       <!-- Content ---->
       <div class="content clearfix">

         <!-- MAIN CONTENT -->

         <div class="main-content">
            <h1 class="recent-post-title"><?php echo $poststitle; ?></h1>

            <?php foreach ($posts as $post): ?>
         
            <div class="post">
               <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                <div class="post-preview">
               <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
               <i class="far fa-user"><?php echo $post['username']; ?></i>
               &nbsp;
               <i class="far fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
               <p class="preview-text">
                  <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
               </p>
               <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
            </div>
         </div>
            <?php endforeach; ?>
                  
     </div>
      

      <!---- //Main Content -->
         
         <div class="sidebar">
         

            <div class="section search">
               <h2 class="section-title">Search</h2>
               <form action="index.php" method="post">
                 <input type="text" name="search-term" class="text-input" placeholder="Search...">
               </form>
            </div>

            <div class="section topics">
              <h2 class="section-title">Topics</h2>
              <ul>
                <?php foreach ($topics as $key => $topic): ?>
                <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                <?php endforeach; ?>
              

              </ul>  
            </div>


         </div>

      </div>
   </div>

   <!-- //Page Wrapper -->


   <!--- Footer --->
   
   <?php include(ROOT_PATH. "/app/Includes/footer.php"); ?>

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
