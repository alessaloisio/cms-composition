		<footer class="banner">
			<div id="footer-top center">
				<div class="banner-content">
					<div class="content">
					
						<div class="cta-news">
							<div class="image-container">
								<img src="<?= get_field('footer_image','options')['sizes']['medium_large']; ?>"/>
							</div>
							<div class="textes-container">
								<p><?php the_field('footer_texte','options')['titre']; ?></p>
								<a href="#" class="lien lien-texte-fleche">Tissus et habillage maison</a>
								<img src="<?php echo get_stylesheet_directory_uri()."/assets/svg/fleche-droite.svg"; ?>"/>
							</div>
						</div>
						<div class="heures-container tablet-off">
							<div class="icon">
							<img src="<?php echo get_stylesheet_directory_uri()."/assets/svg/time-clock.svg"; ?>"/>
							</div>
							<h5 class="titre-section" when-visible="fade">Horaires</h5>
							<ul>
								<li when-visible="fade">

									<p><?php the_field('footer_horaires', 'options')['titre']; ?>
									</p>
								</li>
							</ul>
							
						</div>
					</div>
				</div>
			</div>
			<div id="footer-bottom">
				<div class="banner-content">
					<div class="content">
						<div class="bloc-googlemap">
							<h5 class="titre-section">Rendez-nous visite !</h5>
							
							<a class="googlemap lien-texte-fleche" when-visible="fade" href="<?= get_field('footer_googleMap_link','options'); ?>" target="_blank" rel="noopener">Google map
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri()."/assets/svg/fleche-droite.svg"; ?>"/>
								</div>
              </a>
						</div>
						<div class="bloc-coordonnees">
							<span class="adresse">
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri()."/assets/svg/marker-road.svg"; ?>"/>
								</div>
								<p>
								<?php the_field('footer_adresse', 'options')['titre']; ?>
								</p>
							</span>
							<span class="email">
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri()."/assets/svg/icon-arrobas.svg"; ?>"/>
								</div>
								<p>
									<a href="mailto:<?php the_field('footer_email', 'options')['titre']; ?>"><?php the_field('footer_email', 'options')['titre']; ?></a>
								</p>
							</span>
							<span class="telephone">
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri()."/assets/svg/phone-2.svg"; ?>"/>
								</div>
								<p>
									<a href="tel:<?php the_field('footer_telephone', 'options')['titre']; ?>"><?php the_field('footer_telephone', 'options')['titre']; ?></a>
								</p>
							</span>
						</div>
						<div class="heures-container tablet-on"></div>
						<div class="social-icons desktop">
							<ul>
								<li class="facebook">
									<a class="icon-container" href="<?= get_field('footer_facebook','options'); ?>">
										<div class="icon facebook">
											<img src="<?php echo get_stylesheet_directory_uri()."/assets/svg/logo-facebook.svg"; ?>"/>
										</div>
									</a>
								</li>
								<li class="instagram">
									<a class="icon-container" href="<?= get_field('footer_instagram','options'); ?>">
										<div class="icon instagram">
											<img src="<?php echo get_stylesheet_directory_uri()."/assets/svg/logo-instagram.svg"; ?>"/>
										</div>
									</a>
								</li>
								<li class="pinterest">
									<a class="icon-container" href="<?= get_field('footer_pinterest','options'); ?>">
										<div class="icon pinterest">
											<img src="<?php echo get_stylesheet_directory_uri()."/assets/svg/logo-pinterest.svg"; ?>"/>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="copyright-line">
							<a class="copyright" href="#">© Composition 2019</a>
							<a class="gdpr" href="#">Politique de confidentialité</a>
						</div>
					</div>
			</div>
		</footer>

		<!-- FOR WORDPRESS FEATURES -->
		<div class="scripts"><?php wp_footer(); ?></div>
		</div> <!-- #body_wrapper -->
	</body>
</html>