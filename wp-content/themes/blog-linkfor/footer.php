<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta <?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Footer</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  
  <!-- Cabeçalho Wordpress -->
  <?php wp_head(); ?>

</head>

<!-- Footer -->
<section id="footer" style="background-color: #3B3C3B; color: white;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 footer-column">
				<h4 class="text-footer">Sobre a Linkfor </h4>
				<p class="descricao-footer">Nós co-criamos produtos digitais que ajudam pessoas disponibilizando times de desenvolvimento remotos exclusivo para planejar, testar e executar o seu o projeto. </p>

				<a href="contato.html">
					<button type="button" class="btn btn-primary btn-contrate">Contrate um time</button>
				</a>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 footer-column">
				<h4 class="text-footer">Navegue</h4>
				<a href="faq.html" class="links-"> FAQ  </a> <br>
				<a href="como-funciona.html" class="links-"> Como funciona </a> <br>
				<a href="index.html#servicos" class="links-"> Nossos serviços  </a> <br>
				<a href="contato.html" class="links-"> Contrate um time  </a> <br>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 footer-column">
				<h4 class="text-footer">Contato</h4>
				<p class="descricao-footer">+55 (61)9 8242-5139 <br/> contato@linkfor.com.br</p>

				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12" style="padding: 0px;"> <!--style="padding: 25px;-->
							<ul class="list-inline social-buttons">
								<li class="list-inline-item" style="font-size: 2em;">
									<a href="https://www.instagram.com/linkfor.io/" target="_blank" ">
										<i class="fa fa-instagram" style="font-size: 1.8em; color: white;"></i>
									</a>
								</li>

								<li class="list-inline-item " style="font-size: 2em;">
									<a href="https://www.linkedin.com/company/linkfor/" target="_blank">
										<i class="fa fa-linkedin" style="font-size: 1.8em; color: white;"></i>
									</a>
								</li>

								<li class="list-inline-item" style="font-size: 2em;">
									<a href="https://www.facebook.com/linkfor.io/" target="_blank">
										<i class="fa fa-facebook-square" style="font-size: 1.8em; color: white;"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="container" style="padding-top: 40px;">
				<div class="row">
					<div class="termos col-sm-12 text-center">
						<p style="color: white;" class="descricao-footer">
							2017-
							<script>
								document.write(new Date().getFullYear())
							</script> &copy; Linkfor - Todos os Direitos reservados.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Footer -->
</html>
