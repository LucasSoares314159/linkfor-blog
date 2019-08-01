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
		<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">

		<!-- Cabeçalho Wordpress -->
		<?php wp_head(); ?>


	</head>

	<body id="page-top" style="background-color: #F5F5F5;">
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
<div class="wrapper" id="wrapper-index">
	<div class="container">
		<div class="row">
			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>

					<?php $i = 1; ?>

					<div class="row">

						<?php while ( have_posts() ) : the_post(); ?>

							<!-- Miniatura do post -->			
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="col-12 miniatura-post">

									<div class="img-post-thumb" style="width: 100%!important; max-height: 35%;">
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?> 
										</a>
									</div>		

									<div class="content-post-thumb">
										<h4 style="font-style: normal;font-weight: normal;font-size: 24px;line-height: 29px;display: flex; align-items: center;color: #000000!important;">

											<a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
										</h4>

										<!--
										<p style="font-family: 'Lato', sans-serif!important;">
											<?php the_excerpt(); ?>
										</p>
									-->

									<p class="publicado-em" style="color: #1B254B; font-weight: bolder; font-size: 14px; font-family: 'Lato', sans-serif;">Post escrito por: <?php the_author (); ?></p>

									<a href="<?php the_permalink(); ?>" class="btn btn-article put-right">Leia o artigo</a>
								</div>

							</div>
						</div>


						<!-- Quando o contador de posts chega a 3 então quebra a linha -->		
						<?php
						if( $i == 3 ){
							echo '</div><div class="row">';
							$i = 0;
						}
						$i++;
						?>

					<?php endwhile; ?>

				</div><!-- /.row -->

			<?php endif; ?>

		</main><!-- #main -->
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
