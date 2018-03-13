<?php get_header(); ?>
<div class="container">
	<div class="row intContent">
		<div class="col-lg-12">
			<br />
			<h1>Ben's Web Dev Blog:</h1>
			<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5969127543696033" data-ad-slot="7837352339" data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
			<br />
		</div>
			<?php query_posts('post_type=post&paged='.$paged.'&cat=215,9'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-lg-12 intContent">
					<div class="row mb-2">
						<div class="col-lg-3 text-center mb-2">
							<a href='<?php the_permalink(); ?>' rel='bookmark' title='<?php the_title(); ?>'>
								<?php the_post_thumbnail('full', array('class' => 'img-thumbnail')); ?>
							</a>
							<br />
							<small><meta itemprop="datePublished" content="<?php the_time('Y-m-d') ?>"><?php the_time('m-d-Y') ?>
							<br /> by <span itemprop="author"><?php the_author() ?></span></small>
							<br />
							<a class="badge badge-pill badge-info p-2 mt-2" href="<?php comments_link(); ?>">
								<i class="fas fa-comments fa-fw"></i>  <?php comments_number( '0', '1', '%' ); ?> Comments
							</a>
						</div>
						<div class="col-lg-9">
							<h2 class="alert alert-dark"><a class="alert-link" role="alert" href='<?php the_permalink(); ?>' rel='bookmark' title='<?php the_title(); ?>'><span itemprop="name"><?php the_title(); ?></span></a></h2>
								<?php the_excerpt(); ?>
						</div>
					</div>
				<hr class="mt-5" />
				</div>
					<?php endwhile; else: ?>
						<p><?php _e('Whoops, something went horribly wrong. Please seek help immediately.'); ?></p>
					<?php endif; ?>
				<div class="col-lg-12">
					<?php echo wss_pagination(); ?>
						<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5969127543696033" data-ad-slot="7837352339" data-ad-format="auto"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					<br />
				</div>
	</div>
</div>
<?php get_footer(); ?>
