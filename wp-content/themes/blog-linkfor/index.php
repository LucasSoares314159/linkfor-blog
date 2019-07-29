<!--
Theme Name: Blog Linkfor
Theme URI: https://linkfor.com.br
Author: Lucas Soares
Author URI: https://www.linkfor.com.br
Description: Tema para blog da linkfor utilizando o wordpress
Version: 1.0
-->

<DOCTYPE html>
	<html <?php language_attributes(); ?>>

	<head>

		<meta <?php bloginfo('charset'); ?>>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Blog Linkfor</title>

		<!-- Custom fonts for this template -->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

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

				color: #2F4A79;
				width: 200px;
				float: right;
				font-weight: bolder;
			}

			.sidebar,h4{

				padding-top: 10px;
				padding-bottom: 20px;
			}

			.sidebar{
				max-width: 100%;
			}

			.miniatura-post{
				background: #FFFFFF;
				box-shadow: 0px 10px 10px rgba(157, 157, 157, 0.25);
				border-radius: 10px;
				padding: 35px;
			}

			.btn-article{
				font-size: 12px;
				border: 1px solid;
				border-radius: 25px;
				padding: 3px 10px 3px 10px;
				float: right;
			}

			.btn-article:hover {
				background-color: #22640E; /* Green */
				color: white;
			}

			.content_right, .content_left{
				float: left;
				width: 45%;
			}
			.content_left{
				padding-right: 5%;
			}

			div#left-column {
				position: absolute;
				width: 800px;
				min-height: 400px!important;
				max-height: 400px!important;
				float: left;
				clear: none;
			}

			div#right-column {
				position: relative;
				width: 800px;
				min-height: 400px!important;
				float: right;
				clear: none;
			}

		</style>


	</head>

	<body id="page-top" style="background-color: #FDFCFC;">
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="padding-top: 30px; background: linear-gradient(90deg, #22640E 0%, #1B254B 65.63%);">
			<div class="container">
				<a href="../"><img src="<?php bloginfo('template_url');?>/img/logo.png" width="150" height="49"></a>
      <!--<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
    </button>-->
    <div class="collapse navbar-collapse" id="navbarResponsive">
    	<ul class="navbar-nav ml-auto">
    		<li class="nav-item">
    			<a class="nav-link js-scroll-trigger" href="../"  style="color: white!important; font-family: 'Lato', sans-serif;">Blog</a>
    		</li>
    		<li class="nav-item">
    			<a class="nav-link js-scroll-trigger" href="../#sobre"  style="color: white!important; font-family: 'Lato', sans-serif;">FAQ</a>
    		</li>
    		<li class="nav-item">
    			<a class="nav-link js-scroll-trigger" href="../consultoria/"  style="color: white!important; font-family: 'Lato', sans-serif;">Como funciona?</a>
    		</li>
    		<li class="nav-item">
    			<a class="nav-link js-scroll-trigger" href="../blog/"  style="color: white!important; background-color: #22640E; font-family: 'Lato', sans-serif;">Contrate um time</a>
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
				<h2 class="text-left" style="font-size: 36px;color: white; padding-bottom: 10px; padding-top: 50px; font-family: 'Lato', sans-serif;"><span style="font-weight: lighter;"> Aprenda sobre </span>Produtos Digitais</h2>
				<p style="font-family: 'Lato', sans-serif; font-size: 24px; color: white;">Conteúdos exclusivos para você tomar a melhor decisão no seu projeto</p>
			</div>
		</div>
	</div>
</div>

<!-- Posts -->
<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>

	<!-- Parte da esquerda -->
	<div class="container">
		<div id="left-column">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 miniatura-post">

					<!-- Miniatura do post -->
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>	
					</a>

					<h4 style="font-family: 'Lato', sans-serif; font-style: normal;font-weight: normal;font-size: 24px;line-height: 29px;display: flex; align-items: center;color: #000000;">

						<a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
					</h4>

					<p style="font-family: 'Lato', sans-serif!important;">
						<?php the_excerpt(); ?>
					</p>

					<p class="publicado-em" style="color: #60C4E8; font-weight: bolder; font-size: 14px; font-family: 'Lato', sans-serif;">Publicado em: <?php echo get_the_date('d/m/y'); ?> , Post escrito por: <?php the_author (); ?></p>

					<a href="<?php the_permalink(); ?>" class="btn btn-article">Leia o artigo</a>
				</div>
			</div>
		</div>
	</div>

<?php endif; endwhile; else: ?>

<div>Alternate content</div>
<?php endif; ?>

<?php $i = 0; rewind_posts(); ?>

<!-- Loop 2 -->
<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) !== 0) : $wp_query->next_post(); else : the_post(); ?>

	<!-- parte da direita -->
	<div class="container">
		<div id="right-column">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 miniatura-post">
					<!-- Miniatura do post -->
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>	
					</a>

					<h4 style="font-family: 'Lato', sans-serif; font-style: normal;font-weight: normal;font-size: 24px;line-height: 29px;display: flex; align-items: center;color: #000000;">

						<a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
					</h4>

					<p style="font-family: 'Lato', sans-serif!important;">
						<?php the_excerpt(); ?>
					</p>

					<p class="publicado-em" style="color: #60C4E8; font-weight: bolder; font-size: 14px; font-family: 'Lato', sans-serif;">Publicado em: <?php echo get_the_date('d/m/y'); ?> , Post escrito por: <?php the_author (); ?></p>

					<a href="<?php the_permalink(); ?>" class="btn btn-article">Leia o artigo</a>

				</div>
			</div>
		</div>
	</div>

<?php endif; endwhile; else: ?>

<div>Alternate content</div>
<?php endif; ?>

<!-- Footer -->

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
