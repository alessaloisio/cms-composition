<?php /* Template Name: Architecture Template */ ?>

<?php get_header(); ?>

<div class="page-content">
  <div class="block-black"></div>
  <div class="block-content center">
    <section class="container-diaporama">
 
      <h1>Pas plus de design, du meilleur design.</h1>
        
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
    </section>
    <section class="container-histoire">
      <div class="block first-block">
        <h1>The end is not the end</h1>
        <p class="subtitle">Notre histoire</p>
				<p>Depuis 2005, nous mettons en avant des fournisseurs, des artisans et des designers de qualité, parfois confidentiels, mais toujours hautement qualitatifs.</p>

				<p>Une approche qui a visiblement séduit de nombreux clients amateurs de design. En 2012, il a fallu augmenter l’espace pour parvenir à présenter un nombre de marques et designers toujours plus grand.</p>

				<p>Notre magasin de Huy présente auourd’hui un maximum de collections, soigneusement triées, dans le charme des vieilles briques.</p>
			

    	</div>
      <div class="block second-block">
        <ul class="chronologie">
          <li class="light"><span class="annee">2005</span><div class="trait"></div><p class="texte">Magasin de 200 m2, route du Condroz</p></li>
          <li class="light"><span class="annee">2005</span><div class="trait"></div><p class="texte">Premium dealer pour Ethnicraft</p></li>
					<li class="light"><span class="annee">2012</span><div class="trait"></div><p class="texte">Magasin de 1000m2, Huy</p></li>
					<li class="light"><span class="annee">2014</span><div class="trait"></div><p class="texte">Premium dealer pour Vincent Shepard</p></li>
					<li class="light"><span class="annee">2015</span><div class="trait"></div><p class="texte">Premium dealer pour Fama</p></li>
					<li class="light"><span class="annee">2016</span><div class="trait"></div><p class="texte">Premium dealer pour MD House</p></li>
					<li class="light"><span class="annee">2017</span><div class="trait"></div><p class="texte">Premium dealer pour Fermob</p></li>
					<li class="light"><span class="annee">2018</span><div class="trait"></div><p class="texte">Premium dealer pour Diaz</p></li>
					<li class="light"><span class="annee">2018</span><div class="trait"></div><p class="texte">Premium dealer pour Oliver B</p></li>
        </ul>
      </div>
      <div class="block third-block">
        <img src=" <?= get_template_directory_uri() ?>/assets/images/1000x1300_01.jpg" alt="">
      </div>
      <div class="block fourth-block">
        <h1>Vous, nous et votre maison</h1>
        <p class="subtitle">Notre caractère</p>
        <p class="light">Le mobilier que vous achetez chez nous doit s’accorder durablement avec vos envies et avec votre intérieur. N’achetez rien trop rapidement !</p>
        <p class="light">Pour être sûrs que vous soyez satisfaits de vos achats, nous assumons notre rôle d’architectes d’intérieur. Nous prenons le temps de l’échange, nous étudions vos photos, nous comparons les différents choix avec vous et vous conseillons sur l’harmonisation des tons et des matières.</p>
        <p class="light">Ce temps et ces conseils consacrés à vous faire faire de bons achats sont offerts avec plaisir, car c’est pour nous un peu comme une passion.</p>
      </div>
     
    </section>
  </div>
  <div class="block-contact about">
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