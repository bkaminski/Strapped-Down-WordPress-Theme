<?php get_header(); ?>
		<div class="container">
			<div class="row">
				<div class="col-md-9 intContent pb-4">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<br />
						<h1 class="articleTitle"><?php the_title(); ?></h1>
							<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5969127543696033" data-ad-slot="7837352339" data-ad-format="auto"></ins>
								<script>
									(adsbygoogle = window.adsbygoogle || []).push({});
								</script>
						<?php the_content(); ?>
					<?php endwhile; else: ?>
						<p><?php _e('Whoops, something went horribly wrong. Please seek help immediately.'); ?></p>
					<?php endif; ?>
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