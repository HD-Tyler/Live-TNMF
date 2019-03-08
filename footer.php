<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TNMF
 */

?>

<?php wp_footer(); ?>

<!-- FOOTER
======================================================-->
<section class="black-bg">
<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col d-flex flex-column justify-content-center">
				<h2>Ready to purchase?</h2>
				<a href="#product" class="btn btn-primary tnmf-btn">Buy Now</a>
				<p>© <?php echo date('Y'); ?> TNMF</p>
			</div>
		</div>
	</div>
</footer>
</section>


<!-- BOOTSTRAP CORE JAVASCRIPT
======================================================-->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
	

</body>
</html>
