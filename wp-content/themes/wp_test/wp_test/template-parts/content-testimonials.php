<div class="site-section border-bottom">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary"><?php the_field('testimonials_title'); ?></h2>
      </div>
    </div>
    <div class="slide-one-item home-slider owl-carousel">
      <?php $loop = new WP_Query(
        array(
          'post_type' => 'testimonials',
          'orderby' => 'post_id',
          'order' => 'ASC'
        )
      ); ?>
      <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <div>
          <div class="testimonial">
            <figure class="mb-4">
              <img src="<?php the_field('testimonial_item_image'); ?>" alt="Image" class="img-fluid mb-3">

            </figure>
            <blockquote>
              <p>&ldquo;<?php the_field('testimonial_item_text'); ?>&rdquo;</p>
              <p class="author"> &mdash; <?php the_field('testimonial_item_author'); ?></p>
            </blockquote>
          </div>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</div>