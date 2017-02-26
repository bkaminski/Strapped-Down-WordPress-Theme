<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title(); ?><?php bloginfo('description'); ?></title>

        <!-- favicon and branding icons -->
        
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
        <body <?php body_class(); ?>>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <a class="navbar-brand" href="#">Title</a>
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Link</a>
                        </li>
                    </ul>
                </div>
            </nav>