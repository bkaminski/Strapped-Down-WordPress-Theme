<?php get_header(); ?>
<div class="container">
	<div class="row">
	<br />
		<div class="col-lg-9 intContent">
		<br />
			<div class="alert alert-success">
				<h4 class="text-center">
					<?php printf( __( 'Search Results for:&nbsp;<em>&ldquo;%s&rdquo;</em>', 'strapped_down' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h4>
			</div>
			<?php echo wss_pagination(); ?>
			<br />
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2><a href='<?php the_permalink() ?>'rel='bookmark' title='<?php the_title(); ?>'><?php the_title(); ?></a></h2>
						<span class="badge badge-pill badge-secondary p-2">
							<small><meta itemprop="datePublished" content="<?php the_time('Y-m-d') ?>"><?php the_time('m-d-Y') ?> by <span itemprop="author"><?php the_author() ?></span></small>
						</span>
						<br />
						<br />
							<?php the_excerpt(); ?>
						<br />
						<hr>
							<?php endwhile; else: ?>
								<div class="alert alert-danger"><?php _e('<h4>Well, I could not find anything to match your search. Try again?<h4>'); ?></div>
									<?php endif; ?>
									<p><?php echo wss_pagination(); ?></p>
									<br />
									<br />
								</div>
		<div class="col-lg-3">
			<?php get_sidebar(); ?>	
		</div>
	</div>
</div>
<?php get_footer(); ?>