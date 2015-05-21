<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="UTF-8">
        <meta name="description" content="Stirling Symposium Event">
        <meta name="keywords" content="Stirling,University,Symposium,Event,September,Education,Employment,Corporate,RBS,Hutton,One,Michael Page,Mattel">
        <meta name="author" content="Stirling University Computer Club, Robert Hester">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
        <?php wp_head(); ?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/lazyload.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/mobilemenu.js"></script>
    </head>
    <body>
        <div class="container-fluid container-restricted">
            <div class="row header">
                <div class="content">
                    <img class="logo" src="http://www.stir.ac.uk/media/wwwstiracuk/styleassets/images/Stir-logo.svg" alt="University of Stirling Logo" />
                    <ul class="desktopmenu hidden-xs">
                        <?php wp_nav_menu(); ?>
                    </ul>
                    <span class="glyphicon glyphicon-menu-hamburger visible-xs mobilemenubutton"></span>
                    <ul class="mobilemenu"<?php if (is_admin_bar_showing()) { echo ' style="top:146px;"'; } ?>>
                        <?php wp_nav_menu(); ?>
                    </ul>
                </div>
            </div>