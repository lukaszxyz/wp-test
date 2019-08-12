<div class="site-section border-bottom" id="section-our-team">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary" data-aos="fade"><?php the_field('people_title'); ?></h2>
            </div>
        </div>
        <div class="row">
            <?php $loop = new WP_Query(
                array(
                    'post_type' => 'people',
                    'orderby' => 'post_id',
                    'order' => 'DSC'
                )
            ); ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                $facebook_url = get_field("people_item_facebook");
                $twitter_url = get_field("people_item_twitter");
                $linkedin_url = get_field("people_item_linkedin");
                $instagram_url = get_field("people_item_instagram");
                ?>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <div class="person">
                        <img src="<?php echo $thumb_url[0] ?>" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle">
                        <h3><?php the_title(); ?></h3>
                        <p class="position text-muted"><?php the_field('people_item_position'); ?></p>
                        <p class="mb-2"><?php the_field('people_item_text'); ?></p>
                        <a class="mb-4 d-inline-block" href="<?php the_permalink(); ?>">Read more</a>
                        <ul class="ul-social-circle">
                            <?php if ($facebook_url) : ?>
                                <li><a href="<?php echo $facebook_url; ?>"><span class="icon-facebook"></span></a></li>
                            <?php endif; ?>
                            <?php if ($twitter_url) : ?>
                                <li><a href="<?php echo $twitter_url; ?>"><span class="icon-twitter"></span></a></li>
                            <?php endif; ?>
                            <?php if ($linkedin_url) : ?>
                                <li><a href="<?php echo $linkedin_url; ?>"><span class="icon-linkedin"></span></a></li>
                            <?php endif; ?>
                            <?php if ($instagram_url) : ?>
                                <li><a href="<?php echo $instagram_url; ?>"><span class="icon-instagram"></span></a></li>
                            <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>