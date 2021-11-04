<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeoGram - SEO Agency Template</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

    <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.main.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.min.css"> -->
</head>
<?php wp_head(); ?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="<?php echo get_site_url(); ?>" class="navbar-brand">Seo<span class="text-primary">Gram.</span></a>
        <?php //echo create_responsive_image(get_theme_mod( 'logo_header_desktop' )); ?>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="menu-header-container flex" id="navbarContent">
         <?php wp_nav_menu(array('theme_location'=>'Header' , 'menu_class'=> 'navbar-nav ml-auto')); ?>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="btn btn-primary ml-lg-2" href="#">Free Analytics</a>
             </li>
          </ul>
        </div>

      </div>
    </nav>