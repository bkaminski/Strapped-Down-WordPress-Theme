<?php get_header(); ?>
	<div class="container">
		<div id="postBody" class="col-md-12">
			<h1>
				<span itemprop="headline"><?php the_title(); ?></h1></span>
			</h1>
				<time>
					<span itemprop="datePublished">
						<small><?php the_time('l, F jS, Y') ?></small>
					</span>
				</time>
			<br />
			<span itemprop="image">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}?>
			</span>
			<br /><br />
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<section>
						<div itemscope itemtype="http://schema.org/BlogPosting">
							<article>
								<span itemprop="articleBody"><?php the_content(); ?></span>
							</article>
						</div><!-- /BlogPosting --> 
					</section>
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' , 'strapped_down' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
		<div class="alert alert-info">
			<span itemprop="keywords"><small><?php the_tags('<span class="badge badge-default">Related Topics:</span>&nbsp;&nbsp;', ', '); ?></small></span>
		</div>
	</div>
<?php get_footer(); ?>