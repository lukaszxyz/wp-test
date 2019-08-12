<div class="site-section" id="section-about">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade-up" data-aos-delay="100">
                <img src="<?php the_field('aboutUs_image'); ?>" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-md-6 order-md-1" data-aos="fade-up">
                <div class="text-left pb-1 border-primary mb-4">
                    <h2 class="text-primary"><?php the_field('aboutUs_title'); ?></h2>
                </div>
                <?php the_field('aboutUs_paragraph'); ?>
            </div>
        </div>
    </div>
</div>