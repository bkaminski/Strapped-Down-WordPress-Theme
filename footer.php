		<a href="javascript:" id="back-up" title="Back to Top">
			<i class="fa fa-chevron-up" aria-hidden="true"></i>
		</a>
		<div id="sdFooter">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="text-white"><i class="fa fa-compass fa-fw fa-lg" aria-hidden="true"></i> Navigation:</h3>
						<?php dynamic_sidebar( 'strapped_down_footer_menu' ); ?>
					</div>
					<div class="col-md-6">
						<h3 class="text-white"><i class="fa fa-linkedin-square fa-fw fa-lg" aria-hidden="true"></i> LinkedIn:</h3>
						<div class="LI-profile-badge text-center" data-version="v1" data-size="large" data-locale="en_US" data-type="vertical" data-theme="light" data-vanity="kaminskiben">
							<a class="LI-simple-link" href='https://www.linkedin.com/in/kaminskiben?trk=profile-badge'>Ben Kaminski</a>
						</div>
					</div>
				</div>
			</div>
			<br />
			<div class="col-sm-12 text-center text-white">
				<small>Copyright &copy; 2009 - <?php echo date('Y'); ?> <a class="text-white" href="https://benkaminski.com">benkaminski.com</a></small>
			</div>
		</div>
		<!-- contact modal -->
		<?php include get_template_directory() . '/inc/contactModal.php'; ?>
		<!-- \\\\\\\\\\\\\ SCRIPTS //////////// -->
		<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
		<?php wp_footer(); ?>
	</body>
</html>