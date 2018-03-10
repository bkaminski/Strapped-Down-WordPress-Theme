<?php get_header(); ?>
	<div class="container">
	<div class="row">
		<div class="col-md-9 intContent pb-4">
			<br />
				<h1 class="articleTitle">You got 404'ed!</h1>
					<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5969127543696033" data-ad-slot="7837352339" data-ad-format="auto"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
				<br />
				<br />
				<p class="alert alert-warning">The page your browser is requesting doesn't exist, has been moved, or some other horrible mistake happened. Try another search or navigate the website using the menu's available.
				<br />
				<small>It's ok. We all 404 from time to time</small></p>
			<br />
			<p><small><em><?php the_tags('<span class="badge badge-success">Related:</span>&nbsp;<span itemprop="keywords">'); ?></span></em></small><br /></p>
			<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5969127543696033" data-ad-slot="7837352339" data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
		</div>
		<div class="col-lg-3 sidebarShell">
			<?php get_sidebar(); ?>
		</div>
		</div>
	</div>
<?php get_footer(); ?>