<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f15ae48ffc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	</head>

	<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>
		<?php wp_body_open(); ?>

		<?php do_action( 'ocean_before_outer_wrap' ); ?>
    <!-- Header -->
    <nav class="navbar navbar-default" id="header">
      <div class="container-fluid justify-content-between justify-content-md-center container-header">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://localhost/wordpress/index.php/home/">
            <img src="http://localhost/wordpress/wp-content/uploads/2020/07/JOIN.svg" alt="">
          </a>
        </div>
        <ul class="nav navbar-nav d-none d-md-flex flex-row">
          <li><a href="#espaco">Espaços</a></li>
          <li><a href="#servicos">Serviços</a></li>
          <li><a href="#tour">Tour 360°</a></li>
          <li><a href="#pics">Fotos</a></li>
          <li><a href="#zen">Espaço Zen</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#uniao">Sobre Nós</a></li>
          <li><a href="#contact">Fale Conosco</a></li>
        </ul>
        <button type="button" class="navbar-toggler d-md-none navbar-light" data-toggle="collapse" data-target="#menu_toggle">
          <span class="navbar-toggler-icon"></span>                        
        </button>
        <div class="collapse navbar-collapse d-md-none" id="menu_toggle">
          <ul class="nav navbar-nav">
					<li><a href="#espaco">Espaços</a></li>
          <li><a href="#servicos">Serviços</a></li>
          <li><a href="#tour">Tour 360°</a></li>
          <li><a href="#pics">Fotos</a></li>
          <li><a href="#zen">Espaço Zen</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#uniao">Sobre Nós</a></li>
          <li><a href="#contact">Fale Conosco</a></li>
          </ul>
        </div>
      </div>
    </nav>
  	<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main"><?php oceanwp_theme_strings( 'owp-string-header-skip-link', 'oceanwp' ); ?></a>

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">

			<?php do_action( 'ocean_before_main' ); ?>

			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">