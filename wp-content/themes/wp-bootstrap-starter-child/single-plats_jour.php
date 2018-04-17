<?php
/**
* Template Name: Template Accueil
**/
get_header(); ?>
  <section id="primary" class="content-area col-sm-12 col-lg-12">
    <main id="main" class="site-main row" role="main">

      <?php $query = new WP_Query( array('posts_per_page' => 1,'post_type' => 'plats_jour') );
      while ( $query->have_posts() ) : $query->the_post(); ?>
      <h3 class="ml-5 mb-5 font-weight-light">Notre Plat du Jour</h3>
      <article class="d-flex row">
        <img class="col-md-6" src="<?php the_field('photo_du_plat'); ?>" alt=""/>

        <div class="col-md-4">
          <h2 class="mb-0 text-left font-weight-light"> <?php the_field('nom_du_plat'); ?> - <?php the_field('prix_du_plat'); ?>€</h2>
          <h4 class="mt-0 font-italic font-weight-light"> <?php the_field('categorie_du_plat'); ?></h4>
          <p class="text-left font-weight-light"><?php the_field('liste_des_ingredients'); ?></p>
        </div>

      </article>

      <?php wp_reset_postdata(); endwhile;?>
    </main><!-- #main -->
  </section><!-- #primary --><?php
get_footer();
