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
					<div class="card border-dark mb-4">
						<div class="card-header">
							<h2 class="card-title">
								<a class="text-dark" href='<?php the_permalink() ?>'rel='bookmark' title='<?php the_title(); ?>'><?php the_title(); ?></a>
							</h2>
							<div class="badge badge-warning">
								<meta itemprop="datePublished" content="<?php the_time('Y-m-d') ?>"><?php the_time('l, F jS, Y') ?>
									by 
								<span itemprop="author"><?php the_author() ?></span>
							</div>
						</div>
						<div class="card-body text-dark pt-0">
							<p class="card-text">
								<?php the_excerpt(); ?>
									
							</p>
						</div>
					</div>
				<?php endwhile; else: ?>
				<?php _e('<h4>Well, I could not find anything to match your search. Try again?<h4>'); ?>
				<?php endif; ?>
				<?php echo wss_pagination(); ?>
				<br />
				<br />
		</div>
		<div class="col-lg-3">
			<?php get_sidebar(); ?>	
		</div>
	</div>
</div>
<?php get_footer(); ?>
