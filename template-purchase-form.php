<?php
/**
 * Template Name: Template Purchase Form
 * */
/** * T * * @package Boo_Energy */

get_header();
?>

<div class="package-selection-section hidden">
	<?php echo do_shortcode( '[purchase_flow show_b2b="true" portfolio_package_values="1161" movable_package_values="1038" fixed_package_value="1039,1147,1148"]' ); ?>
</div>
<?php
echo get_template_part( 'template-parts/flow/templates/template-purchase-form' );
?>
<?php
get_footer();

