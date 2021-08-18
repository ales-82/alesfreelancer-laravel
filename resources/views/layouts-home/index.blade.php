@extends('template')
@section('titulo','AlesFreelancer | Desarrollo web - Sistemas  y WebAdministrables')
@section('header')
	@include('partials.header')
@endsection
@section('slider')
	@include('partials.slider')
@endsection
@section('content')
<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container" id="about">
			<h3 class="style_caption text-center">Me presento</h3>
			<div class="row">
				<p class="lead parrafo">
               		Mi nombre es Ales Escobar, soy una persona apasionante sobre las tecnologias informaticas y con muchas ganas de aprender, comprometerme, y trabajador en el ámbito de desarrollo, y aplicaciones referentes a la web, tanto en PHP - JSP - Python y entre otros lenguajes, soy Técnico de analista de Sistemas, pero mi disciplina es la programación web tanto en FrameWorks, cms y otros. Actualmente estoy capacitandome en Apps para tecnologias moviles en Android, Vue, React entre otros.               		
               		Tambien dispongo de otros intereses como la inteligencia artificial, ciencia de datos, y entre disciplinas a fines.
            	</p>
				<!--<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-credit-card"></i>
						</span>
						<h3>Credit Card</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
						<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-wallet"></i>
						</span>
						<h3>Save Money</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
						<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-paper-plane"></i>
						</span>
						<h3>Free Delivery</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
						<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
					</div>
				</div>-->
			</div>
		</div>
	</div>
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<!--<span>Cool Stuff</span>-->
					<h2>Servicios y Productos</h2>
					<!--<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>-->
				</div>
			</div>
			<h3 class="style_caption"></h3>
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/portfolio/lenceria-intimo.jpg);">
							<div class="inner">
								<p>
									<a href="#" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="#" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="">Hauteville Concrete Rocking Chair</a></h3>
							<span class="price">$350</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/portfolio/LibreriaOnline.jpg);">
							<span class="sale">Sale</span>
							<div class="inner">
								<p>
									<a href="#" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="#" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="#">Pavilion Speaker</a></h3>
							<span class="price">$600</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/portfolio/cafebar.png);">
							<div class="inner">
								<p>
									<a href="#" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="#" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="#">Ligomancer</a></h3>
							<span class="price">$780</span>
						</div>
					</div>
				</div>
			</div>
			<!--<h3 class="style_caption">Diseño Web Front-End Personzalizado a Medida</h3>
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/Shop/celulares.jpg);">
							<div class="inner">
								<p>
									<a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="single.html" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.html">Alato Cabinet</a></h3>
							<span class="price">$800</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/Shop/submarine.png);">
							<div class="inner">
								<p>
									<a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="single.html" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.html">Earing Wireless</a></h3>
							<span class="price">$100</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/Shop/tienda.png);">
							<div class="inner">
								<p>
									<a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="single.html" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.html">Sculptural Coffee Table</a></h3>
							<span class="price">$960</span>
						</div>
					</div>
				</div>
			</div>-->
		</div>
	</div>
@endsection
@section('footer')
	@include('partials.footer')
@endsection
