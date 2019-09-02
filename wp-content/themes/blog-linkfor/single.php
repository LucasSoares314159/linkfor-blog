<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta <?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>
    <?php
    if ( is_home()||is_page()||is_category() ){ 
      ?><?php bloginfo('description') ?> | <?php bloginfo('name'); ?><?php 
    }

    else { ?>
      <?php wp_title(' '); ?> - <?php bloginfo('name'); ?><?php }
    ?>

  </title>


  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
  
  <!-- Cabeçalho Wordpress -->
  <?php wp_head(); ?>

</head>

<body id="page-top" style="background-color: #FDFCFC;">

 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="padding-top: 30px; background: linear-gradient(90deg, #22640E 0%, #1B254B 65.63%);">
      <div class="container">
        <a href="../"><img src="<?php bloginfo('template_url');?>/img/logo.png" width="150" height="49"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../http://blog.linkfor.com.br/"  style="color: white!important; font-family: 'Lato', sans-serif;">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../https://linkfor.com.br/faq.html"  style="color: white!important; font-family: 'Lato', sans-serif;">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../https://linkfor.com.br/como-funciona.html"  style="color: white!important; font-family: 'Lato', sans-serif;">Como funciona?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../https://linkfor.com.br/contato.html"  style="color: white!important; background-color: #22640E; font-family: 'Lato', sans-serif;">Contrate um time</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


  <!-- Blog Cabeçalho-->
  <div class="blog" style="padding: 80px 0 60px 0px; background: linear-gradient(90deg, #22640E 0%, #1B254B 65.63%);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-left" style="font-size: 36px;color: white; padding-bottom: 10px; padding-top: 50px; font-family: 'Lato', sans-serif;"><span style="font-weight: lighter;"><?php the_title(); ?></h2>
          </div>
        </div>
      </div>
    </div>

    <!-- Blog -->
    <div class="blog" style="padding: 40px 0 80px 0px;">
     <div class="container">
      <div class="row">
        <center>
         <div class="col-md-8 col-sm-12 text-left">

          <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

           <p style="font-family: 'Lato, sans-serif; color: white;">
             <?php the_content(); ?>
           </p>

        </div>
      </center>
    <?php endwhile; ?>

    <?php else : get_404_template(); endif; ?>

  </div>
</div>
</div>


<!-- Footer -->
<?php get_footer(); ?>

<!-- Bootstrap core JavaScript -->
<script src="<?php bloginfo('template_url');?> /vendor/jquery/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?> /vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php bloginfo('template_url');?> /vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="<?php bloginfo('template_url');?> /js/jqBootstrapValidation.js"></script>
<script src="<?php bloginfo('template_url');?> /js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php bloginfo('template_url');?> /js/agency.min.js"></script>

</body>

</html>