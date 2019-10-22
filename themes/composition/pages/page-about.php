<?php /* Template Name: About Template */ ?>

<?php get_header(); ?>

<div class="page-content">
  <div class="block-black"></div>
  <div class="block-content center">
    <section class="container-diaporama">
 
      <h1>Pas plus de design, du meilleur design.</h1>
        
      <div class="content-diaporama">
        <!-- Permet de faire un query pour récupérer les projets -->
        <!-- https://codex.wordpress.org/the_loop => Multiple Loops Example 2 -->
       
        <div class="posts">

					<?php
						$images = get_field('slider','options');
						$html ='';
						if(!empty($images))
						{
							$html .= '<div id="slider-diaporama">';
							foreach($images as $image)
							{
								
								$html .= '  <div class="post">';
								$html .= '<img src="'.$image['image']['sizes']['large'].'"/>';
								$html .= '	</div>';
							}
							$html .= '</div>';
							echo $html;
						}
					?>
          
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
				</div>
      </div>
    </section>
    <section class="container-histoire">
      <div class="block first-block">
			<?php 
				$histoire = get_field('histoire', 'options');
				$html = '<h1>'.$histoire['titre'].'</h1>';
				$html .= '<p class="subtitle">'.$histoire['sous-titre'].'</p>';
				$html .= $histoire['texte'];
				echo $html;
			?>
        
    	</div>
      <div class="block second-block">
				<?php 
				//var_dump(get_field('timeline', 'options')); 
				$rows = get_field('timeline', 'options');
				$html = '<ul class="chronologie">';
				if(!empty($rows))
				{
					foreach($rows as $row)
					{
						$html .= '<li class="light"><span class="annee">'.$row['annee'].'</span>';
						$html .= '<div class="trait"></div><p class="texte">'.$row['description'].'</p></li>';
						
					}
				}
				$html .= '</ul>';
				echo $html;
				?>
      </div>
      <div class="block third-block">
				<?php
					$caractere = get_field('caractere', 'options');
				?>
        <img src=" <?= $caractere['image']['sizes']['large'] ?>" alt="">
      </div>
      <div class="block fourth-block">
				<?php
				
				$html = '<h1>'.$caractere['titre'].'</h1>';
				$html .= '<p class="subtitle">'.$caractere['sous-titre'].'</p>';
				$html .= $caractere['texte'];
				echo $html; 
				?>
        
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