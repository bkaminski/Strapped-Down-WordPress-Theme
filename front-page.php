<?php get_header(); ?>
<!-- react jumbotron -->
<section>
	<div id="jumboTRON"></div>
</section>
	<div class="container">
	<h1 class="text-white">Latest News:</h1>
		<?php include get_template_directory() . '/inc/cardStack.php'; ?>
	</div>
	<br />
	<br />
	<!-- Bootstrap Carousel -->
	<div id="exampleCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		    <li data-target="#exampleCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#exampleCarousel" data-slide-to="1"></li>
		    <li data-target="#exampleCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
		    <div class="carousel-item active">
		      	<img class="d-block img-fluid" src="//placehold.it/2500x750" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      	<img class="d-block img-fluid" src="//placehold.it/2500x750" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      	<img class="d-block img-fluid" src="//placehold.it/2500x750" alt="Third slide">
		    </div>
		 </div>
	</div>
<?php get_footer(); ?>