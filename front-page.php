<?php get_header(); ?>
		<div id="aboutBen">
			<div class="container">
				<p class="text-center text-white dropping-bombs1">My name is <span class="consolata">Ben Kaminski</span>...</p>
				<p class="text-center text-white dropping-bombs2"> > I have a passion for this <span class="consolata"><u>web</u> <u>development</u> &amp;&amp; <u>web</u> <u>application</u></span> stuff.</p>
				<p class="text-center text-white dropping-bombs3"> >> Decades of experience in <span class="consolata"><u>web</u> <u>programming</u></span> and <span class="consolata"><u>front</u>-<u>end</u> <u>design</u></span>.</p>
				<p class="text-center text-white dropping-bombs4"> >>> Coding is my art, lifestyle choice, and creative outlet.</p>
					<div id="downArrow" class="text-center">
						<a class="text-white" href="#here">
							<i id="goDown" class="bk-bounce fas fa-chevron-circle-down fa-fw fa-3x"></i>
							<br />
							<small class="dropping-bombs5">much more...</small>
						</a>
					</div>
			</div>
		</div>
		<div id="aboutInfo" class="col col-fluid">
			<video autoplay="" id="video-background" muted="" plays-inline src="<?php echo get_template_directory_uri(); ?>/media/wilm-sunrise-01.mp4" type="video/mp4">
				<!-- loading fallback -->
				<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw text-white"></i>
				<p class="text-center">Your browser may not support HTML5 video</p>
				<span class="sr-only">Sunrise over the port of Wilmington Delaware.</span>
			</video>
	    	<div id="bgContainer" class="container pt-5">
	      		<div class="row">
	        		<div class="col-sm-3">
	            		<img class="img-thumbnail" src="/wp-content/uploads/2018/03/benkaminski.jpg" alt="Ben Kaminski" />
	            			<p class="text-center text-white"><em>Ben Kaminski<br /><small>Photo Credit: Ben Kaminski</small></em></p>
	        		</div>
	        		<div class="col-sm-9">
	          			<h1 class="text-white site-title">This is Who I am:</h1>
	            		<p class="lead text-white">My name is Ben Kaminski. I design, program, and maintain websites and web applications across the globe. I have over 20 years experience working in the field of internet technology and infrastructure. I can help you or your company achieve web technology goals and solve existing issues. I am a trusted, relied upon developer that can get things done quickly and effictively. I am also an experienced technology cosultant that can help your company utilize cost effective technology solutions.</p>
	              		<hr />
	              		<p class="text-white">Find out more about my history of programming and design by clicking on the button below.</p>
	              		<p><a class="btn btn-secondary btn-lg" href="about-ben-kaminski">more about me... <i class="fa fa-arrow-right fa-fw" aria-hidden="true"></i></a></p>
	        		</div>
	        	</div>
	    	</div>
	  	</div>
		<div id="mainBody" class="pt-3">
			<div class="container">
				<h2 class="text-white">Recent Articles:</h2>
					<?php include get_template_directory() . '/inc/cardStack.php'; ?>
				<br />
			</div>
			<br />
			<div id="siCarousel">
				<!-- Single Image Carousel -->
				<div class="slider">
	  				<div class="slider-row"></div>
				</div>
				<div id="siCarouselImgTextArea">
					<div class="container">
						<p class="text-center text-muted"><small>note to self: go outside from time to time...</small></p>
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>
