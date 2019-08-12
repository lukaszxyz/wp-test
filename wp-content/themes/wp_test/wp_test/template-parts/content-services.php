    <div class="site-section bg-light" id="section-services">
      <div class="container">
        <div class="row justify-content-center mb-5" data-aos="fade-up">
          <div class="col-md-7 text-center border-primary">
            <h2 class="mb-0 text-primary"><?php the_field('services_title'); ?></h2>
            <p class="color-black-opacity-5"><?php the_field('services_sub_title'); ?></p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <?php $loop = new WP_Query(
            array(
              'post_type' => 'services',
              'orderby' => 'post_id',
              'order' => 'DSC'
            )
          ); ?>
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
              <div class="unit-4 d-flex">
                <div class="unit-4-icon mr-4"><span class="text-primary flaticon-<?php the_field('services_item_icon'); ?>"></span></div>
                <div>
                  <h3><?php the_field('services_item_title'); ?></h3>
                  <p><?php the_field('services_item_text'); ?></p>
                  <p><a href="<?php the_field('services_item_link'); ?>">Learn More</a></p>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
        </div>
      </div>
    </div>