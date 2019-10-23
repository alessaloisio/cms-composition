<?php /* Template Name: Shop Template */ ?>

<?php get_header(); ?>

<div class="page-content">
  <div class="block-black"></div>
  <div class="block-content">
    <section class="container-diaporama">
      <h1 class="center slide-content-left"><?= get_field('nom_groupe', 'options'); ?></h1>
      <div class="content-diaporama center">
        <div class="groupe-container fade-content">
          <img src="<?= get_field('image_groupe', 'options')['url'] ?>" alt="<?= $value['image_groupe']['title'] ?>" />
        </div>
      </div>
    </section>

    <section class="container-histoire shop center">
      <?php 
        $coders = get_field('coders', 'options');
        if(!empty($coders)):
          $i = 2;
          foreach($coders as $coder):

            $odd = $i % 2;

            $img = '<div class="block img-block'. ($odd === 0 ? " slide-content-left" : " slide-content-right") .'">
                    <img src="'.$coder['image']['url'].'" alt="'.$coder['image']['title'].'" />
                  </div>';

            if($odd === 0) echo $img;
      ?>

        <div class="block<?= ($odd > 0 ? " slide-content-left" : " slide-content-right") ?>">
          <h1><?= $coder['name'] ?></h1>
          <?= $coder['bio'] ?>
        </div>

      <?php 
            if($odd > 0) echo $img;

            $i++;
          endforeach; 
        endif;
      ?>

    </section>
  </div>
</div>

<?php get_footer(); ?>  