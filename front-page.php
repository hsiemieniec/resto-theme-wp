<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package resto
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section id="main-banner">
				<img src="<?php echo get_template_directory_uri() ?>/img/banner.jpg" alt="banner">
			</section>

			<div class="wrapper">
				<section id="main-menu">
					<h2 id="menu-logo">MENU</h2>
					<ul>
						<li>
							<span class="dish-name">Voluptate cillum fugiat</span>
							<span class="dish-price">$50</span>
							<span class="dish-description">Cheese, tomate, mushrooms, onion</span>
						</li>

						<li>
							<span class="dish-name">Voluptate cillum fugiat</span>
							<span class="dish-price">$50</span>
							<span class="dish-description">Cheese, tomate, mushrooms, onion</span>
						</li>

						<li>
							<span class="dish-name">Voluptate cillum fugiat</span>
							<span class="dish-price">$50</span>
							<span class="dish-description">Cheese, tomate, mushrooms, onion</span>
						</li>

						<li>
							<span class="dish-name">Voluptate cillum fugiat</span>
							<span class="dish-price">$50</span>
							<span class="dish-description">Cheese, tomate, mushrooms, onion</span>
						</li>

						<li>
							<span class="dish-name">Voluptate cillum fugiat</span>
							<span class="dish-price">$50</span>
							<span class="dish-description">Cheese, tomate, mushrooms, onion</span>
						</li>

						<li>
							<span class="dish-name">Voluptate cillum fugiat</span>
							<span class="dish-price">$50</span>
							<span class="dish-description">Cheese, tomate, mushrooms, onion</span>
						</li>

						<li>
							<span class="dish-name">Voluptate cillum fugiat</span>
							<span class="dish-price">$50</span>
							<span class="dish-description">Cheese, tomate, mushrooms, onion</span>
						</li>

						<li>
							<span class="dish-name">Voluptate cillum fugiat</span>
							<span class="dish-price">$50</span>
							<span class="dish-description">Cheese, tomate, mushrooms, onion</span>
						</li>
					</ul>
				</section>

				<section id="featured-dishes">
					<h2>Featured dishes</h2>
                    <ul>
                        <?php
                        /* Start the Loop */
                        $wp_query = new WP_Query("category_name=dishes&posts_per_page=4");
                        while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                        <li>
                            <?php the_post_thumbnail(); ?>
                            <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                            <span><?php echo get_post_meta($post->ID,"price", true) ?></span>
						</li>

                        <?php endwhile; ?>
                    </ul>

				</section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
