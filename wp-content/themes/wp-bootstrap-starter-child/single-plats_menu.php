<?php get_header(); ?>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article class="d-flex row">

          <img class="col-md-6" src="<?php the_field('photo_du_plat'); ?>" alt=""/>

          <div class="col-md-4">
            <h2 class="mb-0 text-left font-weight-light"> <?php the_field('nom_du_plat'); ?> - <?php the_field('prix_du_plat'); ?>€</h2>
            <h4 class="mt-0 font-italic font-weight-light"> <?php the_field('categorie_du_plat'); ?></h4>
            <p class="text-left font-weight-light"><?php the_field('liste_des_ingredients'); ?></p>
          </div>

        </article>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>
