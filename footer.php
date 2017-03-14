		<a href="javascript:" id="back-up" title="Back to Top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
		<div class="sdFooter" style="background:<?php echo ( get_theme_mod( 'sD_footer_bg_color' ) ); ?>;border-top:4px solid <?php echo ( get_theme_mod( 'sD_footer_top_border_color' ) ); ?>; ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<h3 class="text-white text-center">Test 1</h3>
					</div>
					<div class="col-md-4">
						<h3 class="text-white text-center">Test 2</h3>
					</div>
					<div class="col-md-4">
						<h3 class="text-white text-center">Test 3</h3>
					</div>
				</div>
			</div>
		</div>
		<!-- \\\\\\\\\\\\\ SCRIPTS //////////// -->
		<?php wp_footer(); ?>
		<script async type="text/babel" src="<?php echo get_template_directory_uri(); ?>/js/elapsedapp.jsx"></script>
		<script async type="text/babel" src="<?php echo get_template_directory_uri(); ?>/js/jumbotron.jsx"></script>
	</body>
</html>