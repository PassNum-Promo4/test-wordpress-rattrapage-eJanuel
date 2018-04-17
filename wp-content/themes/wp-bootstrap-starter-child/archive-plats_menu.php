<?php get_header(); ?>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="mt-3 p-3 col-md-12">

        <div class="d-flex col justify-content-between">

          <div class="d-flex flex-column">
            <h5><a class="text-dark" href="<?php the_field('lien_vers_le_plat'); ?>"><?php the_field('nom_du_plat'); ?></a></h5>
            <span class="font-italic font-weight-light"><?php the_field('liste_des_ingredients'); ?></span>
          </div>

          <div class="my-auto ml-5">
            <span> <?php the_field('prix_du_plat'); ?>€</span>
          </div>

        </div>

      </div>
    <?php endwhile; ?>
    </div>
  <?php endif; ?>
<?php get_footer(); ?>
