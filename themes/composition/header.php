<!-- SHOW PHP ERRORS -->
<?php 
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
  <title>Composition <?= wp_title( '|', false ); ?></title>

  <?php wp_head(); ?>
</head>
<body>
	<div id="body-wrapper">
		<header class="main-header">
		<div class="container">
			<a href="#" class="mh-logo">

				<?php $uri = get_stylesheet_directory_uri()."/assets/svg/logo-full.svg"; ?>
				<img src="<?php echo $uri ?>"/>
			</a>
			<nav class="main-nav">
				<ul class="main-nav-list">
					<li class="home">
						<a href="#">
							<?php $uri = get_stylesheet_directory_uri()."/assets/svg/home-minimal.svg"; ?>
							<img src="<?php echo $uri ?>" width="15"/>
						</a>
					</li >
					<li class="menu-item">
						<a href="#">Magasin</a>
					</li>
					<li class="menu-item">
						<a href="#">Architecte d'intérieur</a>
					</li>
					<li class="menu-item">
						<a href="#">À propos</a>
					</li>
					<li class="menu-item">
						<a href="#">Blog</a>
					</li>
					<li class="menu-item">
						<a href="#">Contact</a>
					</li>
					<li class="wish-list">
						<a href="#">Wish List</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>