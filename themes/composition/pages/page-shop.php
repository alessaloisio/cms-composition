<?php /* Template Name: Shop Template */ ?>

<?php get_header(); ?>

<div class="page-content">
  <div class="block-black"></div>
  <div class="block-content">
    <section class="container-diaporama">
      <h1 class="center">Les roues de secours.</h1>
      <div class="content-diaporama center">
        <div class="groupe-container">
          <img src="<?= get_template_directory_uri() ?>/assets/images/groupe/groupe.jpg" alt="Groupe Image">
        </div>
      </div>
    </section>

    <section class="container-histoire shop center">
      <div class="block">
        <h1>Alessandro Aloisio</h1>
        <p class="subtitle">Présentation 1</p>
      </div>
      <div class="block img-block">
        <img src="<?= get_template_directory_uri() ?>/assets/images/groupe/alessandro.jpg" alt="Alessandro Aloisio">
      </div>

      <div class="block img-block">
        <img src="<?= get_template_directory_uri() ?>/assets/images/groupe/serge.jpg" alt="Serge Bayet">
      </div>
      <div class="block">
        <h1>Serge Bayet</h1>
        <p class="subtitle">Présentation 2</p>
      </div>

      <div class="block">
        <h1>Augustin</h1>
        <p class="subtitle">Présentation 3</p>
      </div>
      <div class="block img-block">
        <img src="<?= get_template_directory_uri() ?>/assets/images/groupe/augustin.jpg" alt="Augustin">
      </div>

      <div class="block img-block">
        <img src="<?= get_template_directory_uri() ?>/assets/images/groupe/anneso.jpg" alt="Anne-Sopie ">
      </div>
      <div class="block">
        <h1>Anne-Sophie </h1>
        <p class="subtitle">Présentation 4</p>
      </div>
    </section>
  </div>
</div>

<?php get_footer(); ?>  