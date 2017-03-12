<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon and branding icons -->
        
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
        <body <?php body_class(); ?>>
            <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <a class="navbar-brand" href="#">Navbar</a>
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
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                   
            </nav>
                        
                   
            