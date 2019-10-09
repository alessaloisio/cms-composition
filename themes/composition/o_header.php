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

  <title>Composition <?= wp_title( '|', false ); ?></title>

  <?php wp_head(); ?>
</head>
<body>

  <header>

    <nav>
      <ul>
        <?php 
          $pages = get_pages(); 
          foreach ( $pages as $page ) {
            $option = '<li><a href="' . get_page_link( $page->ID ) . '">';
            $option .= $page->post_title;
            $option .= '</a></li>';
            echo $option;
          }
        ?>
      </ul>
    </nav>

  </header>