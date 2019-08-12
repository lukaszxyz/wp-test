<div class="site-section block-13" id="section-industries">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
                <h2 class="mb-0 text-primary"><?php the_field('industries_title'); ?></h2>
                <p class="color-black-opacity-5"><?php the_field('industries_sub_title'); ?></p>
            </div>
        </div>
    </div>
    <div class="owl-carousel nonloop-block-13">
        <?php $loop = new WP_Query(
            array(
                'post_type' => 'industries',
                'orderby' => 'post_id',
                'order' => 'ASC'
            )
        ); ?>
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <div>
                <a href="<?php the_field('industries_item_link'); ?>" class="unit-1 text-center">
                    <img src="<?php the_field('industries_item_image'); ?>" alt="Image" class="img-fluid">
                    <div class="unit-1-text">
                        <h3 class="unit-1-heading"><?php the_field('industries_item_title'); ?></h3>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        <?php
        if (is_active_sidebar('industries')) {
            dynamic_sidebar('industries');
        }
        ?>
    </div>
</div>