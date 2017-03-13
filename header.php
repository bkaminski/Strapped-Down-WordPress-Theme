<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- favicon and branding icons -->
        <?php wp_head(); ?>
    </head>
        <body <?php body_class(); ?>>
            <nav class="navbar sticky-top navbar-inverse bg-inverse navbar-toggleable-md">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <a class="navbar-brand" href="/"><?php bloginfo( 'name' ); ?></a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php wp_nav_menu(array(
                                    'menu'              => 'top_nav',
                                    'theme_location'    => 'top_nav',
                                    'depth'             => 2,
                                    'container'         => '',
                                    'container_class'   => '',
                                    'container_id'      => '',
                                    'menu_class'        => 'navbar-nav mr-auto',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'walker'            => new wp_bootstrap_navwalker()
                                    )
                            ); ?>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
                                    <i class="fa fa-search fa-fw fa-lg" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                   
            </nav>           