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
	<link rel="icon" type="image/svg" href="<?php echo get_stylesheet_directory_uri()."/assets/svg/logo-small.svg"; ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Site de mobilier intérieur">
  <meta name="keywords" content="Architecture, Décoration, Meubles">
  <meta name="author" content="Serge, Anso, Gus, Alessandro">
  <title>Composition <?= wp_title( '|', false ); ?></title>

	<?php wp_head(); ?>
	<script type="text/javascript">
		const stylesheet_directory_uri = "<?php echo get_stylesheet_directory_uri(); ?>";
	</script>
</head>
<body>
	
	<div id="body-wrapper">
		<header class="main-header">
		<?php
			
			$menuItems = wp_get_nav_menu_items("Principal");
			
			if($pagename == '' && (get_post_type($post) !== 'post'))
			{
				$style = "white-style";
				$color = "white";
			}
			else
			{
				$style = "black-style";
				$color = "black";
			}
			
				?>
				<style>
					header.main-header {
						background-color: <?= $color ?>;
					}
					.clear-bar-nav {
						background-color: <?= $color ?>;
					}
				</style>
				
		<div class="center container <?= $style ?>"> 
		
			<a href="<?= home_url(); ?>" class="mh-logo">

				<?php $uri = get_stylesheet_directory_uri()."/assets/svg/logo-full.svg"; ?>
				<img src="<?php echo $uri ?>"/>
			</a>
			<nav class="main-nav <?= $style ?>">
				<ul class="main-nav-list">
					<?php
						$html = '';
						$counter = 0;
						$uri = '<img src="'.get_stylesheet_directory_uri()."/assets/svg/home-minimal.svg".'" width="15"/>';
						foreach($menuItems as $menuItem)
						{
							$class = "";
							
							if(home_url( $wp->request ).'/' == $menuItem->url) {
								$class = "active";
							}
							if($counter == 0)
							{
								$menuItem->title = $uri;
							}
							
							$html .= '<li class="menu-item '.$class.'">';
								$html .= '<a href="'.$menuItem->url.'">';
									$html .= $menuItem->title;
								$html .= '</a>';
							$html .= '</li>';
							$counter++;
						}
						echo $html;
					?>
					
					<li class="wish-list">
						<a href="#">Wishlist 
							
							<?php $uri = get_stylesheet_directory_uri()."/assets/svg/wish.svg"; ?>
							<img src="<?php echo $uri ?>" width="15"/>
							
						</a>
					</li>
					<li class="telephone">
						<a href="#">
							<?php $uri = get_stylesheet_directory_uri()."/assets/svg/phone-2.svg"; ?>
							<img src="<?php echo $uri ?>" width="15"/>
						</a>
					</li>
					<li class="menu">
						
						<a><span class="menu-label">Menu</span>
							<?php $uri = get_stylesheet_directory_uri()."/assets/svg/menu.png"; ?>
							<img src="<?php echo $uri ?>" width="15"/>
						</a>
						<div id="menu-mobile" class="hidden">
						
						</div>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="clear-bar-nav"></div>
