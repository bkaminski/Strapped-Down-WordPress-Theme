<?php get_header(); ?>
<div class="container">
    <div class="row">
    <br />
        <div class="col-lg-9 intContent">
        <br />
            <div class="alert alert-success">
                <h3>
                    <?php printf( __( 'Posts Tagged With: %s', 'strapped-down' ), '<span>' . get_search_query() . '</span>' ); ?><em>&ldquo;<?php single_tag_title(); ?>&rdquo;</em>
                </h3>
            </div>
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5969127543696033" data-ad-slot="7837352339" data-ad-format="auto"></ins>
            <script>
               (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <br />
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2><a href='<?php the_permalink() ?>'rel='bookmark' title='<?php the_title(); ?>'><?php the_title(); ?></a></h2>
                    <span class="badge badge-pill badge-secondary p-2">
                        <small><meta itemprop="datePublished" content="<?php the_time('Y-m-d') ?>"><?php the_time('m-d-Y') ?> by <span itemprop="author"><?php the_author() ?></span></small>
                    </span>
                    <br />
                    <?php the_excerpt(); ?>
                    <br />
                    <hr>
                      <?php endwhile; else: ?>
                          <div class="alert alert-danger"><?php _e('<h4>No article tags found for your query.<h4>'); ?></div>
                      <?php endif; ?>
                  <p><?php echo wss_pagination(); ?></p>
                  <br />
                  <br />
                      <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5969127543696033" data-ad-slot="7837352339" data-ad-format="auto"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
        </div>
        <div class="col-lg-3">
            <?php get_sidebar(); ?> 
        </div>
    </div>
</div>
<?php get_footer(); ?>