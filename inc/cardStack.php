<!-- top of card deck using flex-box -->
	<div class="row">
		<?php $my_query = new WP_Query( 'cat=0&posts_per_page=2' );
			while ( $my_query->have_posts() ) : $my_query->the_post();
			$do_not_duplicate[] = $post->ID; ?>
		<div class="col-lg card-deck mb-4">
			<div class="card text-white bg-info card-drop">
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
					<div class="card-body" style="border-top: 2px solid #000;">
					    <p class="card-text"><?php the_excerpt(); ?></p>
					    <br /><br />
					</div>
				    <div class="card-footer">
				      	<small class="text-white"><em>Last updated: <?php the_time('m/d/Y  g:i:a'); ?></em></small>
				    </div>
				</div>
			</div>
			<span class="hidden-lg-up"><br /></span>
		<?php endwhile; ?>
	</div>
	<!-- rest of card deck using flex-box -->
	<div class="row">
		<?php $my_query = new WP_Query( 'cat=0&posts_per_page=3&offset=2' );
			while ( $my_query->have_posts() ) : $my_query->the_post();
			$do_not_duplicate[] = $post->ID; ?>
		<div class="col-lg card-deck mb-4">
			<div class="card text-white bg-info card-drop">
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
				<div class="card-body" style="border-top: 2px solid #000;">
					 <p class="card-text"><?php the_excerpt(); ?></p>
					 	<br /><br />
				</div>
				<div class="card-footer">
				     <small class="text-white"><em>Last updated: <?php the_time('m/d/Y  g:i:a'); ?></em></small>
				</div>
			</div>
		</div>
		<span class="hidden-lg-up"><br /></span>
		<?php endwhile; ?>	
	</div>