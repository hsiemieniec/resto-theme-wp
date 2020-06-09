<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resto
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="wrapper">
			<ul>
				<li>New York Restaurant</li>
				<li>3926 Anmoore Road</li>
				<li>New York, NY 10014</li>
				<li>718-749-1714</li>
			</ul>
	
			<ul>
				<li>France Restaurant</li>
				<li>68, rue de la Couronne</li>
				<li>75002 PARIS</li>
				<li>05.94.23.69.56</li>
			</ul>
	
			<ul>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
	
			<ul>

				<li><img src="<?php echo get_template_directory_uri() ?>/img/black-logo.png" alt="LOGO"></li>
				<li>&copy; All Rights Reserved 2020.</li>
			</ul>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
