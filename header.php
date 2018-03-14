<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/media/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/media/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/media/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/media/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/media/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/media/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
	    <?php wp_head(); ?>
  	</head>
  	<body <?php body_class(); ?>>
    	<div id="topHeader">
			<div class="row">
				<div class="col-sm-7">
  			    	<a class="noUnderline consolata" id="titleText" href="/">
  			        	<h2 class="fa-hover"><strong>benkaminski.com</strong></h2>
  			        </a>
			    </div>
			    <div class="col-sm-5">
  			        <ul class="list-inline">
  			          	<li class="list-inline-item subnav-anchor">
  			          		<a target="_blank" href="https://twitter.com/thebenkaminski" class="social-icons"><i class="bk-hover fab fa-twitter fa-fw"></i></a>
  			          	</li>
  			          	<li class="list-inline-item subnav-anchor">
  			          		<a target="_blank" href="https://github.com/bkaminski" class="social-icons"><i class="bk-hover fab fa-github fa-fw"></i></a>
  			          	</li>
  			          	<li class="list-inline-item subnav-anchor">
  			          		<a target="_blank" href="https://stackexchange.com/users/3132060/ben-kaminski?tab=accounts" class="social-icons"><i class="bk-hover fab fa-stack-exchange fa-fw"></i></a>
  			          	</li>
  			          	<li class="list-inline-item subnav-anchor">
  			          		<a target="_blank" href="https://medium.com/@benkaminski" class="social-icons"><i class="bk-hover fab fa-medium-m fa-fw"></i></a>
  			          	</li>
  			          	<li class="list-inline-item subnav-anchor">
  			          		<a target="_blank" href="https://facebook.com/bens.tweetsonly/" class="social-icons"><i class="bk-hover fab fa-facebook-f fa-fw"></i></a>
  			          	</li>
  			          	<li class="list-inline-item subnav-anchor">
  			          		<a target="_blank" href="https://www.linkedin.com/in/kaminskiben/" class="social-icons"><i class="bk-hover fab fa-linkedin-in fa-fw"></i></a>
  			          	</li>
  			          	<li class="list-inline-item subnav-anchor">
  			          		<a target="_blank" href="https://plus.google.com/u/0/+BenKaminski" class="social-icons"><i class="bk-hover fab fa-google-plus-g fa-fw"></i></a>
  			          	</li>
  			        </ul>
			    </div>
			</div>
		</div>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark navbar-sD" style="background-image: url('<?php echo get_template_directory_uri();?>/media/rubber_grip.png');border-bottom: 4px solid #5abfdd;">
	    	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#bkNavbar" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="cursor:pointer;">
	    		<i class="fas fa-align-justify fa-lg mt-1 mb-1"></i>
	    	</button>
	       	<a id="here" style="margin-top:-30px;"></a>
	        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
	        	<img src="<?php echo content_url(); ?>/uploads/2016/04/bk-fav-icon-xl.png" alt="benkaminski.com branding icon" width="45" height="45" class="bkBrand" />
	        </a>
	        	<div class="collapse navbar-collapse" id="bkNavbar">
	            	<ul class="navbar-nav mr-auto consolata">
	                	<li class="nav-item">
	                    	<a class="nav-link" href="/about-ben-kaminski/"><i class="fas fa-address-book fa-fw" aria-hidden="true"></i>  About</a>
	                    </li>
	                    <li class="nav-item dropdown">
	                    	<a class="nav-link dropdown-toggle" href="#" id="bkNavDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-th-large fa-fw" aria-hidden="true"></i>  Blogs</a>
	                        <div class="dropdown-menu" aria-labelledby="bkNavDropDown">
	                        	<a class="dropdown-item" href="web-development-blog">Dev Blog</a>
	                            <a class="dropdown-item" href="bens-other-blog">Other Blog</a>
	                        </div>
	                    </li>
	                    <li class="nav-item">
	                    	<a class="nav-link bk-contact-modal" href="#"><i class="fas fa-at fa-fw"></i>  Contact</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="donate-pay-using-bitcoin"><i class="fab fa-bitcoin fa-fw"></i>  Donate/Pay</a>
	                    </li>
	                </ul>  
	                <form class="form-inline" method="get" id="searchform" action="<?php echo home_url() ; ?>/">
	                	<div class="input-group">
		                	<input class="form-control" type="text" placeholder="Search this site" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" maxlength="33" required />
		                		<div class="input-group-append">
		                    		<button class="btn btn-info my-sm-0" type="submit">
		                    			<i class="fas fa-search fa-lg fa-fw"></i>
		                    		</button>
		                    	</div>
		                </div>
	                </form>
	            </div>
        </nav>      