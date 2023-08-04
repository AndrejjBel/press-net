<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Press_network
 */

if ( !is_page( ['login', 'email-verification', 'signup', 'forgot', 'recovery-password'] ) ) {
    get_template_part( 'template-parts/head-footer/footer' );
}
?>

</div><!-- #page -->

<?php
wp_footer();
?>

<?php wp_nonce_field( 'press-network', 'press-network' ); ?>

</body>
</html>
