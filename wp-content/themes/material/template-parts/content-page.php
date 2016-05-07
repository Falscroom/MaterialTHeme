<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Material
 */

?>

<?php $header_img = Parser::get_header_image(apply_filters( 'the_content', get_the_content()));  ?>
<?php if ($header_img): ?>
	<div id="index-banner" class="parallax-container">
		<div class="section no-pad-bot container">
			<div class="row">
				<h1 class="header-title"><?php the_title(); ?></h1>
				<div class="header-text"><?php echo Parser::delete_tags(apply_filters( 'the_content', get_the_content())); ?></div>
			</div>
		</div>
		<div class="parallax"><img src="<?php echo $header_img; ?>"></div>
	</div>
<?php else: ?>
	<div class="container" id="post-<?php the_ID()?>">
		<h1><?php the_title() ?></h1>
		<p><?php the_content() ?></p>
	</div>
<?php endif ?>
<?php
$loop = new WP_Query( ['post_type' => 'material_block', 'category_name' => 'Homepage'] );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<div class="<?php echo Parser::get_classes(apply_filters( 'the_title', get_the_title())); ?>" style="padding: 10px 0 10px 0;">
		<div class="container">
			<h2 style="margin: 0">
					<?php echo Parser::delete_tags(apply_filters( 'the_title', get_the_title())); ?>
			</h2>
		</div>
	</div>
	<div class="entry-content">
		<?php Parser::delete_tags(apply_filters( 'the_content', get_the_content())) ?>
	</div>
<?php endwhile ?>

<!--<article id="post-<?php /*the_ID(); */?>" <?php /*post_class(); */?>>
	<header class="entry-header">
		<?php /*the_title( '<h1 class="entry-title">', '</h1>' ); */?>
	</header>

	<div class="entry-content">
		<?php
/*		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'material' ),
			'after'  => '</div>',
		) );
		*/?>
	</div>

	<footer class="entry-footer">
		<?php
/*		edit_post_link(
			sprintf(
				esc_html__( 'Edit %s', 'material' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<span class="edit-link">',
			'</span>'
		);
		*/?>
	</footer>
</article>-->
