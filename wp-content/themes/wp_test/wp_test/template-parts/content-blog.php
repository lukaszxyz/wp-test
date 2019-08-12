<div class="site-section" id="section-blog">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary"><?php the_field('blog_title'); ?></h2>
        <p class="color-black-opacity-5"><?php the_field('blog_sub_title'); ?></p>
      </div>
    </div>
    <div class="row mb-5 align-items-stretch">
      <?php
      $the_query = new WP_Query(array(
        'category_name' => 'News',
        'posts_per_page' => 3,
      ));
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="h-entry">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#"><?php the_title(); ?></a></h2>
              <div class="meta mb-4">by <?php the_author(); ?> <span class="mx-2">&bullet;</span><?php echo get_the_date(get_option('date_format')); ?><span class="mx-2">&bullet;</span> <a href="#"><?php the_category(', '); ?></a></div>
              <p> <?php the_excerpt(); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <p><?php __('No News'); ?></p>
      <?php endif; ?>
    </div>
    <div class="row">
      <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="300">
        <p class="mb-0"><a href="https://free-template.co" class="btn btn-primary py-3 px-5 text-white">View All Blog Posts</a></p>
      </div>
    </div>
  </div>
</div>