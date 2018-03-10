<?php get_header(); ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-9 intContent pr-2">
				<br />
					<article itemscope itemtype="http://schema.org/Article">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="<?php echo get_permalink(); ?>"/>
							<h1 itemprop="headline"><?php the_title(); ?></h1>
								<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5969127543696033" data-ad-slot="7837352339" data-ad-format="auto"></ins>
								<br />
									<script>
										(adsbygoogle = window.adsbygoogle || []).push({});
									</script>
							<div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
								<?php the_post_thumbnail(); ?>
								<meta itemprop="url" content="<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); echo $thumb_url[0];?>">
			      				<meta itemprop="width" content="<?php $imgdata = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); echo $imgwidth = $imgdata[1];?>">
			      				<meta itemprop="height" content="<?php $imgdata = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); echo $imgwidth = $imgdata[2];?>">
							</div>
							<meta itemprop="dateModified" content="<?php the_modified_date(); ?>">
							<br />
								<div class="card text-center bg-secondary text-white mt-2 mb-3">
									<div class="card-header">
										<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
											<?php echo get_avatar( get_the_author_meta('ID'), 75 ); ?>&nbsp;&nbsp; 
												<span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
													<img itemprop="url" src="<?php echo get_template_directory_uri(); ?>/media/apple-icon-72x72.png" alt="benkaminski.com logo" />
												</span>
											<meta itemprop="name" content="BenKaminski.com">
			      						</div>
		      						</div>
		      						<div class="card-body">
		      							<h4 class="card-title"><meta itemprop="datePublished" content="<?php the_time('Y-m-d') ?>"/><?php the_time('F jS, Y') ?></h4>
							    		<p itemprop="author" itemscope itemtype="https://schema.org/Person" class="card-text"> by <span itemprop="name"><?php the_author() ?></span></p>
							    		<p class="text-center">
											<a class="badge badge-info badge-pill p-2" href="<?php comments_link(); ?>"><i class="fa fa-commenting-o fa-fw fa-lg" aria-hidden="true"></i>  <?php comments_number( '0 comments', '1 comment', '% comments' ); ?>
											</a>
										</p>
		      						</div>
		      						<div class="card-footer">
		      							<p class="text-center">
											<a href="http://twitter.com/thebenkaminski" class="twitter-follow-button" data-show-count="true">Follow @thebenkaminski</a>
										</p>
		      						</div>
		      					</div>
							<div itemprop="articleBody">
								<?php the_content(); ?>
							</div>
							<br />
								<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5969127543696033" data-ad-slot="7837352339" data-ad-format="auto"></ins>
								<br />
								<script>
									(adsbygoogle = window.adsbygoogle || []).push({});
								</script>
							<?php comments_template(); ?>
								<p><small><em><?php the_tags('<span class="badge badge-success">Related:</span>&nbsp;<span itemprop="keywords">'); ?></span></em></small><br /></p>
						<?php endwhile; else: ?>
							<p><?php _e('Whoops, something went horribly wrong. Please seek help immediately.'); ?></p>
						<?php endif; ?>
					</article>
				</div>
				<div class="col-lg-3 sidebarShell">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
		<script>
			jQuery('a[href*="#"]')
			  .not('[href="#"]')
			  .not('[href="#0"]')
			  .click(function(event) {
			    if (
			      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
			      && 
			      location.hostname == this.hostname
			    ) {
			      var target = jQuery(this.hash);
			      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
			      if (target.length) {
			        event.preventDefault();
			        jQuery('html, body').animate({
			          scrollTop: target.offset().top
			        }, 666, function() {
			          var $target = jQuery(target);
			          $target.focus();
			          if ($target.is(":focus")) { 
			            return false;
			          } else {
			            $target.attr('tabindex','-1'); 
			            $target.focus();
			          };
			        });
			      }
			    }
			  });
		</script>
<?php get_footer(); ?>