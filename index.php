	<?php include './_header.php'; ?>

<!--SLIDER -->
<div class="bd-example">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="./img/banner-1.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">

				</div>
			</div>
			<div class="carousel-item">
				<img src="./img/banner-2.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">

				</div>
			</div>
			<div class="carousel-item">
				<img src="./img/banner-3.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">

				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<section id="quem-somos">
	<!-- CONTAINER = Largura Restrita (magro) -->
	<div class="container">

		<h4 class="text-center text-uppercase">Sobre a Empresa</h4>
		<hr>

		<!-- LINHA -->
		<div class="row">
			<!-- BLOCO Tamanho 4 Colunas -->
			<div class="col-md-4">
				<img class="img-fluid" src="./img/imagem1.jpg">
			</div>	

			<!--  Bloco tamanho 8 colunas-->
			<div class="col-md-8">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>

			</div>	

		</div>

	</div>

</section>

<?php include './_footer.php'; ?>

