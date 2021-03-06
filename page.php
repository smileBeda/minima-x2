<?php
/**
 * This is the Single Page Template file
 *
 * @see https://developer.wordpress.org/themes/basics/template-files/#template-files
 * @since 1.0.0
 * @package Minima X2
 */

get_header(); ?>
<main id="content">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="header">
					<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
				</header>
				<div class="entry-content">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
					the_content();
					?>
					<div class="entry-links">
						<?php wp_link_pages(); ?>
					</div>
				</div>
			</article>
			<?php
			if ( comments_open()
				&& ! post_password_required()
				) {
				comments_template( '', true );
			}
		}
	}
	?>
</main>
<?php
get_sidebar();
get_footer();

