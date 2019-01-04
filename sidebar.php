<?php if ( ! is_page_template( 'full-width.php' )  ) : ?>
    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
        <?php
            if( is_front_page() && is_active_sidebar( 'home_right_1' ) ){
                dynamic_sidebar( 'home_right_1' );
            } else if ( is_active_sidebar( 'general_right_1' ) ){
                dynamic_sidebar( 'general_right_1' );
            }
        ?>
    </div><!-- #primary-sidebar -->
<?php endif; ?>