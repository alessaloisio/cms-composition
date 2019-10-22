<?php /* Template Name: Architecture Template */ ?>

<?php get_header(); ?>

<div class="page-content">
  <div class="block-black"></div>
  <div class="block-content center">
    <section class="container-diaporama">

      <h1>Prendre soin de votre schéma de vie.</h1>
        
      <div class="content-diaporama">
        <!-- Permet de faire un query pour récupérer les projets -->
        <!-- https://codex.wordpress.org/the_loop => Multiple Loops Example 2 -->
        <?php query_posts( 'category_name=projets' ); ?>

        <div class="posts">
          <?php if ( have_posts() ) : ?>
            <div id="slider-diaporama">
              <?php while ( have_posts() ) : the_post(); ?>
                <!-- début d'un bloc post -->
                <div class="post">
                  <?php the_post_thumbnail(); ?>
                  <div class="info-project">
                    <div class="info-content">
                      <h2 class="title"><?php the_title(); ?> - <?php the_time('Y'); ?></h2>
                      <a class="link" href="<?php the_permalink(); ?>">
                        Voir le projet <span class="arrow"><img src="<?= get_template_directory_uri() ?>/assets/svg/Group 1300.svg" alt="Fleche vers la droite"></span>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- fin d'un bloc post -->
              <?php endwhile; ?>
            </div>

            <div id="nav-diaporama">
              <span class="previous">
                <svg xmlns="http://www.w3.org/2000/svg" width="15.429" height="9.286" viewBox="0 0 15.429 9.286">
                  <g id="fleche-droite" transform="translate(12.929 8.786) rotate(180)">
                    <line id="Line_40" data-name="Line 40" x1="13.879" transform="translate(-1.45 4.143)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                    <path id="Path_612" data-name="Path 612" d="M4.143,0,0,4.143,4.143,8.286" transform="translate(-2)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  </g>
                </svg>
              </span>
              <span class="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="15.429" height="9.286" viewBox="0 0 15.429 9.286">
                  <g id="fleche-droite" transform="translate(12.929 8.786) rotate(180)">
                    <line id="Line_40" data-name="Line 40" x1="13.879" transform="translate(-1.45 4.143)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                    <path id="Path_612" data-name="Path 612" d="M4.143,0,0,4.143,4.143,8.286" transform="translate(-2)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  </g>
                </svg>
              </span>
            </div>
          <?php else: ?>
            <p><?php _e('Désolé, nous n\'avons pas de projet à vous présentez pour le moment.'); ?></p>
          <?php endif; ?>
      </div>
    </section>
    <section class="container-histoire">
      <div class="block first-block">
        <h1><span class="bolder">150 €</span> d'étude d'archi</h1>
        <p class="subtitle">Plutôt une bonne affaire, non ?</p>
        <p class="light">Offrez-vous une étude complète d'architecte d'intérieur dès lors que vous êtes intéressés par du mobilier de notre magasin.</p>
        <p>Pour 150 € au lieu de 1100 €, vous recevez un projet de réaménagement complet d'une pièce ou de l'ensemble de votre maison.</p>
      </div>
      <div class="block second-block">
        <p class="strong">Nous vous aidons à définier une ambiance et à décrire l'espace :</p>
        <ul>
          <li>Schémas de circulation</li>
          <li>Habillage des fenêtres</li>
          <li>Habillage des murs</li>
          <li>Choix des meubles</li>
          <li>Conseil en couleurs (peintures, tapisserie, etc.)</li>
          <li>Réintégration de vieux mobilier</li>
        </ul>
      </div>
      <div class="block third-block">
        <img src=" <?= get_template_directory_uri() ?>/assets/images/1000x1300_02.jpg" alt="">
      </div>
      <div class="block fourth-block">
        <h1>Nghi & Stephan</h1>
        <p>Architecte d'intérieur et designer</p>
        <p class="light">Elle est architecte d'intérieur, lui designer. Elle associes, il compose, elle colore, il meuble, elle illumine, il décore. Depuis tant d'années qu'ils travaillent ensemble. Nghi et Stéphan savent comment rendre réels les besoins et les envies des clients.</p>
        <p class="light">Chaque projet d'architecture d'intérieur commence par une écoute et une visite qui servent à dessinger les contours d'un cahier des charges et qui déjà servent d'inspiration.</p>
        <p class="light">Les propositions de tissus et d'ameublement qui sont ensuite présentées aux clients ajoutent élégance et originialité tout en respectant leur première intuition.</p>
        <p class="light">Il y a trois réponses possibles au design : oui, non et wow. Nous travaillons toujours pour cette dernère.</p>
      </div>
      <div class="block fifth-block">
        <div class="block-grey"></div>
      </div>
    </section>
    <section class="container-caractere">
      <div class="container-diaporama">
        <div class="content-diaporama">
          <!-- Permet de faire un query pour récupérer les projets -->
          <!-- https://codex.wordpress.org/the_loop => Multiple Loops Example 2 -->
          <?php query_posts( 'category_name=projets' ); ?>

          <div class="posts">
            <?php if ( have_posts() ) : ?>
              <div id="slider-diaporama">
                <?php while ( have_posts() ) : the_post(); ?>
                  <!-- début d'un bloc post -->
                  <div class="post">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <!-- fin d'un bloc post -->
                <?php endwhile; ?>
              </div>

              <div id="nav-diaporama">
                <span class="previous">
                  <svg xmlns="http://www.w3.org/2000/svg" width="15.429" height="9.286" viewBox="0 0 15.429 9.286">
                    <g id="fleche-droite" transform="translate(12.929 8.786) rotate(180)">
                      <line id="Line_40" data-name="Line 40" x1="13.879" transform="translate(-1.45 4.143)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                      <path id="Path_612" data-name="Path 612" d="M4.143,0,0,4.143,4.143,8.286" transform="translate(-2)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                    </g>
                  </svg>
                </span>
                <span class="next">
                  <svg xmlns="http://www.w3.org/2000/svg" width="15.429" height="9.286" viewBox="0 0 15.429 9.286">
                    <g id="fleche-droite" transform="translate(12.929 8.786) rotate(180)">
                      <line id="Line_40" data-name="Line 40" x1="13.879" transform="translate(-1.45 4.143)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                      <path id="Path_612" data-name="Path 612" d="M4.143,0,0,4.143,4.143,8.286" transform="translate(-2)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                    </g>
                  </svg>
                </span>
              </div>
            <?php else: ?>
              <p><?php _e('Désolé, nous n\'avons pas de projet à vous présentez pour le moment.'); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="content-caractere">
            <h1>Tissus et artisanat</h1>
            <p class="subtitle">Habillage de meubles et de fenêtres</p>

            <div class="split light">
              <div class="col-4">
                <p>Ajoutez un bin de tissus dans vos intérieurs et changez toute une ambiance : l'estétique, la mise ne valeur de mobilier ou d'éléments d'architecture, la réverbération du son, de la lumière, etc.</p>
                <p>Nous avons un choix formidable de tissus à vous présnter et à assortir entre eux : Diaz, etc.</p>
              </div>
              <div class="col">
                <p class="no-padding">Travail selon les méthodes artisanales :
                  <ul>
                    <li>Regarnissage et rhabillage de toutes pièces de mobilier, mêmes neuves.</li>
                    <li>Confection de tentures, de stores et de rideaux.</li>
                    <li>Tapisseries murales</li>
                    <li>Canapés personnalisés</li>
                    <li>Tapis</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
    </section>
  </div>
  <div class="block-contact">
    <div class="center">
      <div class="white-block">
        <h1>Je souhaite connaître les conditions</h1>
        <a class="link" href="<?php echo get_site_url(); ?>/contact">
          Contact <span class="arrow"><img src="<?= get_template_directory_uri() ?>/assets/svg/Group 1300.svg" alt="Fleche vers la droite"></span>
        </a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>  