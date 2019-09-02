<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta <?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jéssica Soares</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
  
  <!-- Cabeçalho Wordpress -->
  <?php wp_head(); ?>

  <style type="text/css">
    .text-header-1{

      font-size: 3em;
    }

    .text-header-2{
      font-size: 1.2em;
      font-weight: lighter;
      font-style: italic;
      line-height: 50px;
    }

    .btn-pers{

      width: 168px;
      height: 38px;
      background-color: #2F4A79;
      border-radius: 0px;
      color: white;
    }

    .btn-pers-2{

      width: 168px;
      height: 38px;
      background-color: #60C4E8;
      border-radius: 0px;
      color: white;
    }

    .btn-pers-3{

      width: 168px;
      height: 38px;
      background-color: white;
      border-radius: 0px;
      color: #60C4E8;
    }

    .transforme-seu-negocio{
      padding-top: 100px;
    }

    .cards{

      padding: 50px;
      background: #FFFFFF;
      box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.25);
    }

    .blog-pagination{

      color: white;

    }
  </style>


</head>

<body id="page-top">

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

  <!-- Página Padrão -->
  <div class="blog" style="padding: 80px 0 80px 0px;">
   <div class="container">
    <div class="row">

     <div class="col-md-8 col-sm-12">

      <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
       

       <h4 style="font-weight: bolder; color: #60C4E8;"> <?php the_title(); ?> </a></h4>
       <p style="font-family: 'Montserrat', sans-serif; color: white;">
         <?php the_content(); ?>
       </p>

       <hr>  

       <?php get_sidebar(); ?>
       
     </div>



   <?php endwhile; ?>

   <?php else : get_404_template(); endif; ?>

 </div>
</div>
</div>


<!-- Footer -->
<?php get_footer(); ?>


<?php wp_footer(); ?>
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