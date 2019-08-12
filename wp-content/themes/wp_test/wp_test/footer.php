<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_test
 */

?>
<?php wp_footer(); ?>
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <?php
            if (is_active_sidebar('footer-sidebar-1')) {
              dynamic_sidebar('footer-sidebar-1');
            }
            ?>
          </div>
          <div class="col-md-3">
          <?php
            if (is_active_sidebar('footer-sidebar-2')) {
              dynamic_sidebar('footer-sidebar-2');
            }
            ?>
          <?php
										wp_nav_menu( array(
											'theme_location' => 'menu-2',
											'menu_id'        => 'secondary-menu',
											'menu_class'		=> 'list-unstyled m-0'
										) );
										?>
          </div>
        
        <div class="col-md-3">
          <?php
          if (is_active_sidebar('footer-sidebar-3')) {
            dynamic_sidebar('footer-sidebar-3');
          }
          ?>
        </div>
      </div>
      </div>
      <div class="col-md-3">
        <?php
        if (is_active_sidebar('footer-sidebar-4')) {
          dynamic_sidebar('footer-sidebar-4');
        }
        ?>
      </div>
    </div>

<?php
global $wpdb;

$email = $_POST['email'];
$table_name = $wpdb->prefix . "newsletter";
$wpdb->insert( $table_name, array(
    'email' => $email
) );
?>

    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <div class="border-top pt-5">
          <p>
            <small class="block">&copy; <script>
                document.write(new Date().getFullYear());
              </script> Logis Free Template. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://free-template.co/" target="_blank">Free-Template.co</a></small>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-ui.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/popper.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.stellar.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.countdown.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap-datepicker.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/aos.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
</body>

</html>