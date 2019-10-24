<?php get_header(); ?>
<?php
	$post = get_post();
	
	
?>


<div class="page-content single-page-content">
  <div class="block-black">
		
	</div>
	<div class="block-content center-post">
		<div class="top-container">
			<span class="retour-posts">
				<a href="javascript:history.back()" class="strong">
					<span class="icon">
						<img class="rotate-180" src="<?php echo get_stylesheet_directory_uri()."/assets/svg/fleche-droite.svg"; ?>"/>
					</span>
					Retour
				</a>
			</span>
			<span class="date-post strong">
				
				<?php 
					setlocale(LC_ALL, 'fr_FR');

					$time = strtotime($post->post_date);
					$myFormat = strftime("%e %B %Y", $time);
					echo $myFormat;
				?>
				
			</span>
		</div>
		<div class="post-title">
			<h1 class="slide-content-left"><?= $post->post_title ?></h1>
		</div>
		<div class="post-thumbnail fade-content">
			<?php echo get_the_post_thumbnail(); ?>
			<div class="networks">
				<ul>
					<li class="facebook">
						<a class="icon-container" href="<?= get_field('footer_facebook','options'); ?>">
							<div class="icon facebook rotate">
								<img src="<?php echo get_stylesheet_directory_uri()."/assets/svg/logo-facebook.svg"; ?>"/>
							</div>
						</a>
					</li>
					<li class="instagram">
						<a class="icon-container" href="<?= get_field('footer_instagram','options'); ?>">
							<div class="icon instagram rotate">
								<img src="<?php echo get_stylesheet_directory_uri()."/assets/svg/logo-instagram.svg"; ?>"/>
							</div>
						</a>
					</li>
					<li class="mail">
						<a class="icon-container" href="<?= get_field('footer_pinterest','options'); ?>">
							<div class="icon mail rotate">
								<img src="<?php echo get_stylesheet_directory_uri()."/assets/svg/mail.svg"; ?>"/>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="post-content">
			<?php $content = $post->post_content;
			$content = str_replace("<p>", '<p class="fade-content">', $content);
			echo $content; ?>
		</div>
		

		<div class="retour-all-posts">
			<a href="<?= esc_url( get_page_link( 394 ) ) ?>" class="strong">
				<span class="icon">
					<img class="rotate-180" src="<?php echo get_stylesheet_directory_uri()."/assets/svg/fleche-droite.svg"; ?>"/>
				</span>
				Voir les autres articles
			</a>
		</div>
	</div>
	<div class="block-contact about slide-content-right">
    <div class="center">
      <div class="white-block slide-content-left">
        <h1>Je souhaite connaître les conditions</h1>
        <a class="link" href="<?php echo get_site_url(); ?>/contact">
          Contact <span class="arrow"><img src="<?= get_template_directory_uri() ?>/assets/svg/Group 1300.svg" alt="Fleche vers la droite"></span>
        </a>
      </div>
    </div>
	</div>
	
</div> 

<?php get_footer(); ?>  