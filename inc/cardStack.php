<!-- top of card deck using flex-box -->
		<div class="card-deck">
			<?php $my_query = new WP_Query( 'cat=1&posts_per_page=2' );
				while ( $my_query->have_posts() ) : $my_query->the_post();
					$do_not_duplicate[] = $post->ID; ?>
			<div class="card card-info mb-3">
				<div id="post-<?php the_ID(); ?>" class="carousel vert slide" data-ride="carousel" data-interval="<?php echo rand(4500, 6000); ?>">
					<div class="carousel-inner" role="listbox">
					    <div class="carousel-item active">
					      	<a href='<?php the_permalink() ?>' rel='bookmark' title='<?php the_title(); ?>'>
								<?php the_post_thumbnail( 'large' ); ?>
							</a>
					    </div>
					    <div class="carousel-item">
					    	<a href='<?php the_permalink() ?>'>
					      		<img class="d-block img-fluid" src="holder.js/800x533?auto=yes&random=no&text=<?php the_title();?>" />
							</a>
					    </div>
					 </div>
				</div>
				<div class="card-block">
				    <p class="card-text"><?php the_excerpt(); ?></p>
				    <br /><br />
				</div>
			    <div class="card-footer">
			      	<small class="text-muted"><em>Last updated: <?php the_time('m/d/Y  g:i:a'); ?></em></small>
			    </div>
			</div>
			<?php endwhile; ?>
		</div>
		<!-- rest of card deck using flex-box -->
		<div class="card-deck">
		<?php $my_query = new WP_Query( 'cat=1&posts_per_page=3&offset=2' );
				while ( $my_query->have_posts() ) : $my_query->the_post();
					$do_not_duplicate[] = $post->ID; ?>
			<div class="card card-info mb-3">
				<div id="post-<?php the_ID(); ?>" class="carousel vert slide" data-ride="carousel" data-interval="<?php echo rand(4500, 6000); ?>">
					<div class="carousel-inner" role="listbox">
					    <div class="carousel-item active">
					      	<a href='<?php the_permalink() ?>' rel='bookmark' title='<?php the_title(); ?>'>
								<?php the_post_thumbnail( 'large' ); ?>
							</a>
					    </div>
					    <div class="carousel-item">
					    	<a href='<?php the_permalink() ?>'>
					      		<img class="d-block img-fluid" src="holder.js/800x533?auto=yes&random=yes&text=<?php the_title();?>" />
							</a>
					    </div>
					 </div>
				</div>
				<div class="card-block">
				    <p class="card-text"><?php the_excerpt(); ?></p>
				    <br /><br />
				</div>
			    <div class="card-footer">
			      	<small class="text-muted"><em>Last updated: <?php the_time('m/d/Y  g:i:a'); ?></em></small>
			    </div>
			</div>
			<?php endwhile; ?>
		</div>