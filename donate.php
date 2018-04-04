<?php get_header(); 
/*
*Template Name: React Page
*
* @package WordPress
* @subpackage strapped_down
*/
?>
<script type="text/babel" src="<?php echo get_template_directory_uri(); ?>/js/btc_api.jsx"></script>
<script type="text/babel" src="<?php echo get_template_directory_uri(); ?>/js/ltc_api.jsx"></script>
<script type="text/babel" src="<?php echo get_template_directory_uri(); ?>/js/bch_api.jsx"></script>
<script type="text/babel" src="<?php echo get_template_directory_uri(); ?>/js/eth_api.jsx"></script>
<div class="container">
    <div class="row">
        <div class="col-lg-9 intContent pb-4">
            <section>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <br />
                    <h1 class="articleTitle"><?php the_title(); ?></h1>
                	<?php the_content(); ?>
            </section>
            <?php endwhile; else: ?>
                <p><?php _e('Whoops, something went horribly wrong. Please seek help immediately.'); ?></p>
            <?php endif; ?>
            <div class="row">
                <div class="col-lg-6 mt-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/btc-logo.png" height="73" width="350" alt="bitcoin accepted here" title="I gladly accept Bitcoin donations as well as a method of payment." class="aligncenter img-fluid mb-4" />
                    <!-- React WHUT!!! -->
                    <div id="btcPrice"></div>
                    <!-- /BTC React Ticker -->
                    <img src="<?php echo get_template_directory_uri(); ?>/media/btcqr.png" height="200" width="200" alt="Bitcoin QR Code" title="Bitcoin QR Code for Deposit" class="aligncenter img-fluid mt-2" />
                    <p class="text-center"><small><code>1FM3GdnF3E3exYGBjnuLasBmWV78GVgLDN</code></small></p>
                </div>
                <div class="col-lg-6">
                	<span class="d-lg-none d-xl-none">
                		<br />
                	</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/media/ltc-logo.png" height="96" width="350" alt="Litecoin accepted here" title="I gladly accept Litecoin donations as well as a method of payment." class="aligncenter img-fluid" />
                    <!-- React what!!! -->
                    <div id="ltcPrice"></div>
                    <!-- /LTC React Ticker -->
                    <img src="<?php echo get_template_directory_uri(); ?>/media/ltcqr.png" height="200" width="200" alt="Litecoin QR Code" title="Litecoin QR Code for Deposit" class="aligncenter img-fluid mt-2" />
                    <p class="text-center"><small><code>LQzQV5v9c2m7Qkk6wGGH9DrPZTgG7ja188</code></small></p>
               </div>
             </div>
             <div class="row">
             	<div class="col-lg-6">
             		<img src="<?php echo get_template_directory_uri(); ?>/media/bch-logo.png" height="73" width="350" alt="bitcoin cash accepted here" title="I gladly accept Bitcoin Cash donations as well as a method of payment." class="aligncenter img-fluid mb-4" />
                    <!-- React WHUT!!! -->
                    <div id="bchPrice"></div>
                    <!-- /BTC React Ticker -->
                    <img src="<?php echo get_template_directory_uri(); ?>/media/bchqr.png" height="200" width="200" alt="Bitcoin Cash QR Code" title="Bitcoin Cash QR Code for Deposit" class="aligncenter img-fluid mt-2" />
                    <p class="text-center"><small><code>1PaHx7sv7L4oYKFF86MGbwo9TfxzhXchtD</code></small></p>
                </div>
                <div class="col-lg-6">
             		<img src="<?php echo get_template_directory_uri(); ?>/media/eth-logo.png" height="73" width="350" alt="ethereum accepted here" title="I gladly accept ethereum donations as well as a method of payment." class="aligncenter img-fluid mb-4" />
                    <!-- React WHUT!!! -->
                    <div id="ethPrice"></div>
                    <!-- /BTC React Ticker -->
                    <img src="<?php echo get_template_directory_uri(); ?>/media/ethaddr.png" height="200" width="200" alt="Ethereum QR Code" title="Ethereum QR Code for Deposit" class="aligncenter img-fluid mt-2" />
                    <p class="text-center"><small><code>0x33ed31963570fe763a2507e08bb5ff053F970Ed4</code></small></p>
                </div>
               <div class="col-lg-12 mt-4">
               		<p class="text-center"><small class="label">Live crypto market pricing powered by:</small>
               		<br />
               			<a href="https://www.cryptocompare.com/" target="_blank">
               				<img class="mt-2" src="<?php echo get_template_directory_uri(); ?>/media/crypto-compare-logo.png" alt="Live bitcoin data provided by Crypto Compare" height="75" width="75" />
               			</a>
               		</p>
               		<p>While I do accept bitcoin donations and payment for work, I do not offer "crypto-consulting" or "Bitcoin Consulting" services. I am also not interested in ICO offerings as trade/barter material. I still accept credit card and cash payments if you're unfamiliar with Bitcoin and cryptocurrency.</p>
               		<br />
               		<p>Please <a href="#" class="bk-contact-modal">contact me</a> with any questions.</p>
               </div>
            </div>
            <br />
            <br />
            <p><small><em><?php the_tags('<span class="badge badge-success">Related:</span>&nbsp;<span itemprop="keywords">'); ?></span></em></small><br /></p>
        </div>
        <div class="col-lg-3 sidebarShell">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>