<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Grupo CEM</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
		
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
	
		<!-- Header -->
		<header id="header">
			
			<!-- Nav Header -->
			<div id="nav-header">
				<div class="container">
					<div class="header-logo">
						<a href="#" class="logo"><img src="../img/logo.png" alt=""></a>
						<!-- <div class="cubo"></div> -->
					</div>
					<div>
						<p class="header-title">{{ $background[0]->texto }}</p> 
					</div>
					<nav id="main-nav">
						<div class="nav-logo">
							<a href="#" class="logo"><img src="../img/logo-alt.png" alt=""></a>
						</div>
					</nav>
				</div>
			</div>
			<!-- /Nav Header -->
		</header>
		<!-- /Header -->
		
		<!-- SECTION -->
		<div class="section">
			<img src="{{url('/')}}/img/{{$background[0]->imagen}}" class="fondo">
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">EMPRESAS DEL GRUPO</h2>
						</div> <!-- /section title -->

						<!-- section logos -->
						<div class="empresas col-md-6 col-xs-6 col-sm-6 col-lg-3">
							<a href="http://www.carnave.com.ar/" target="_blank"><img src="../img/empresa1.png"></a>
						</div> <!-- /section logos -->

						<!-- section logos -->
						<div class="empresas col-md-6 col-xs-6 col-sm-6 col-lg-3">
							<a href="http://www.aghagronegocios.com.ar/" target="_blank"><img src="../img/empresa2.png"></a>
						</div> <!-- /section logos -->

						<!-- section logos -->
						<div class="empresas col-md-6 col-xs-6 col-sm-6 col-lg-3">
							<a href="http://www.ciaavicola.com.ar/" target="_blank"><img src="../img/empresa3.png"></a>
						</div> <!-- /section logos -->

						<!-- section logos -->
						<div class="empresas col-md-6 col-xs-6 col-sm-6 col-lg-3">
							<a href="http://www.aghagronegocios.com.ar/" target="_blank"><img src="../img/empresa4.png"></a>
						</div> <!-- /section logos -->
					</div> <!-- Main Column -->
				</div> <!-- ROW -->
			</div> <!-- CONTAINER -->
		</div>
		<!-- /SECTION -->


		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">NOTICIAS</h2>
							<div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
						</div>
						<!-- /section title -->

						<!-- owl carousel 2 -->
						<div id="owl-carousel-2" class="owl-carousel owl-theme">
							<!-- ARTICLE -->
							@foreach ($noticias as $nots)
							<article class="article thumb-article">
								<div class="article-img">
									<img src="{{url('/')}}/img/{{$nots->imagen}}" alt="">
								</div>
								<div class="article-body">
									<h3 class="article-title"><a href="#openModal-{{$nots->id_noticias}}">{{ $nots->titulo }}</a></h3>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i>{{ $nots->fecha }}</li>
									</ul>
								</div>
							</article> 
							@endforeach
							<!-- /ARTICLE -->
						</div>
						<!-- /owl carousel 2 -->
						@foreach ($noticias as $nots)
						<div id="openModal-{{$nots->id_noticias}}" class="modalDialog">
								<div>
												
									<a href="#close" title="Close" class="close">X</a>
									<div class="container-fluid">
										
										<div class="row-fluid">
											
											<div class="span12">
												
											    <div class="page-header">
											    	
											        <h3>{{ $nots->titulo }}</h3>
											    	
											    </div>
										       
											    <div class="carousel slide" id="myCarousel-{{$nots->id_noticias}}">
											        
											        <div class="carousel-inner">
											        	@foreach ($slider as $s)
										        			@if($s->id_noticias == $nots->id_noticias)
																@if ($loop->first)
        															<div class="item active">
											                			<div class="bannerImage">
											                  			 	<a href="#"><img src="{{url('/')}}/img/slider/{{$s->imagen}}" alt=""></a>
											               				</div>                    
											            			</div><!-- /Slide1 --> 
            													@else
                													<div class="item">
											                			<div class="bannerImage">
											                    			<a href="#"><img src="{{url('/')}}/img/slider/{{$s->imagen}}" alt=""></a>
											                			</div>									                                                         
											            			</div><!-- /Slide2 --> 
       															 @endif
										        			@endif
										        		@endforeach
													</div>
											        
											        <div class="control-box">                            
											            <a data-slide="prev" href="#myCarousel-{{$nots->id_noticias}}" class="carousel-control left">‹</a>
											            <a data-slide="next" href="#myCarousel-{{$nots->id_noticias}}" class="carousel-control right">›</a>
											        </div><!-- /.control-box -->   
											                              
											    </div><!-- /#myCarousel -->
												
											    <div class="caption row-fluid">
											        <div class="span4"><h3>{{ $nots->subtitulo }}</h3>
											        </div>                	
											        <div class="span8"><p>{{ $nots->noticia }}</p>
											        </div>
											    </div>
											</div><!-- /.span12 --> 
									       
										</div><!-- /.row -->
										  
									</div><!-- /.container -->
								</div>
							</div>
							@endforeach
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->

		<!-- AD SECTION -->
		<div class="visible-lg visible-md">
			<img class="center-block" src="img/fila.png" alt="">
		</div>
		<!-- /AD SECTION -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- Top Footer -->
			<div id="top-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- Column 1 -->
						<div class="widget-title">
							<h3 class="title-foot">CONTACTO</h3>
						</div>
						<div class="col-md-4">
							<!-- footer social -->
							<div class="footer-widget social-widget">
								<ul>
									<li>° AGH - AVIGAN</li>
									<li>Humboldt</li>
									<li>Ruta 70 km 33 - CP 3081</li>
									<li>Tel +54 3496 480380</li>
									<li>info@avigan.com</li>
								</ul>
							</div>
							<!-- /footer social -->
						</div>
						<!-- /Column 1 -->
						<!-- Column 1 -->
						<div class="col-md-4">
							<!-- footer social -->
							<div class="footer-widget social-widget">
								<ul>
									<li>° CARNAVE</li>
									<li>Esperanza</li>
									<li>Hohnfels 2971 - CP 3081</li>
									<li>Tel +54 3496 422002</li>
									<li>info@carnave.com.ar</li>
								</ul>
							</div>
							<!-- /footer social -->
						</div>
						<!-- /Column 1 -->
												<!-- Column 1 -->
						<div class="col-md-4">
							<!-- footer social -->
							<div class="footer-widget social-widget">
								<ul>
									<li>° COMPAÑÍA AVÍCOLA</li>
									<li>Santa Fe</li>
									<li>Facundo Zuviría - CP 3000</li>
									<li>Tel +54 342 4892111</li>
									<li>info@ciaavicola.com.ar</li>
								</ul>
							</div>
							<!-- /footer social -->
						</div>
						<!-- /Column 1 -->
					</div>
					<!-- /ROW -->
				</div>
				<!-- /CONTAINER -->
			</div>
			<!-- /Top Footer -->
			
			<!-- Bottom Footer -->
			<div id="bottom-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- footer links -->
						<div class="col-md-6 col-md-push-6">
							<!--   -->
						</div>
						<!-- /footer links -->
						
						<!-- footer copyright -->
						<div class="col-md-6 col-md-pull-6">
							<div class="footer-copyright">
								<span> &copy; 2018&nbsp;Powered by <a href="http://www.nkstudios.net/" target="_blank" style="color: #B41F26;">NKStudios</a>, All Rights Reserved</span> 
							</div>
						</div>
						<!-- /footer copyright -->
					</div>
					<!-- /ROW -->
				</div>
				<!-- /CONTAINER -->
			</div>
			<!-- /Bottom Footer -->
		</footer>
		<!-- /FOOTER -->
		
		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- Back to top -->
		
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
