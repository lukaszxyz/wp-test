<div class="site-section bg-light" id="section-contact">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary"><?php the_field('contact_title'); ?></h2>
                <p class="color-black-opacity-5"><?php the_field('contact_sub_title'); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 mb-5">
                <form id="form" action="<?php echo admin_url('admin-ajax.php'); ?>" class="p-5 bg-white" method=”post”>
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black" for="fname">First Name</label>
                            <input type="text" name="fname" id="fname" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Subject</label>
                            <input type="subject" name="subject" id="subject" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">

                        </div>
                    </div>
    
                </form>
            </div>
            <div class="col-md-5">
                <div class="p-4 mb-3 bg-white">
                    <p class="mb-0 font-weight-bold"><?php the_field('contact_paragraph_title_1'); ?></p>
                    <p class="mb-4"><?php the_field('contact_paragraph_1'); ?></p>
                    <p class="mb-0 font-weight-bold"><?php the_field('contact_paragraph_title_2'); ?></p>
                    <p class="mb-4"><a href="tel:<?php the_field('contact_paragraph_2'); ?>"><?php the_field('contact_paragraph_2'); ?></a></p>
                    <p class="mb-0 font-weight-bold"><?php the_field('contact_paragraph_title_3'); ?></p>
                    <p class="mb-0"><a href="mailto:<?php the_field('contact_paragraph_3'); ?>"><?php the_field('contact_paragraph_3'); ?></a></p>
                </div>
                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3"><?php the_field('contact_paragraph_title_4'); ?></h3>
                    <p><?php the_field('contact_paragraph_4'); ?></p>
                    <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>
</div>