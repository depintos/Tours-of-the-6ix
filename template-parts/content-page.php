<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>
<?php
$tourswitch = get_the_ID();
switch ($tourswitch) {
	case '87':?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('6ixpert'); ?> >
			<div class="container">
		<?php the_title( '<h1 class="sixperts-entry-title">', '</h1>' ); ?>
		<div class="sixpert-entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<div class="sixpert-footer-background">
			<img src="http://localhost/ToursOfThe6ix/wp-content/uploads/2018/08/Texture-Black.jpg">
		</div>
	</div>
</article>;

	<?	break;
	case "91": ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('Review'); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="reviews-entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
<? break;
case "140": ?>
	<article id="post-<?php the_ID(140); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="first-about-tour-entry">
			<header class="about-tour-entry-header">
				<?php the_title( '<h1 class="about-tour-entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
			<div class="about-tour-content-map">
				<div class="about-tour-entry-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
				<div class="about-tour-entry-map">
					<img src="">
					<div class="about-tour-background">
						<img src="http://localhost/ToursOfThe6ix/wp-content/uploads/2018/08/Texture-Black.jpg">
					</div>
				</div>
			</div>
		</div>
		
		<div class="second-about-tour-entry">		
			<ul class="about-tour-instructions-list">
				<li class="where">
					<span>Starts: INSIDE Union Station's Great Hall (65 Front St W). Look for the clock!</span>
					<span>Ends: Queen St. W (1.6KM from the starting point).</span>
				</li>
				<li class="when">
					Thursdays and Saturdays at 10am (June to October)
				</li>
				<li class="cost">
					FREE (but tipping is greatly appreciated)
				</li>
				<li class="wear">
					Wear comfortable shoes and weather appropriate clothing. Bring an umbrella in case it rains!
				</li>
				<li class="tour-contact">
					For group bookings please contact <span>info@toursofthe6.com</span> and our people will contact your people.
				</li>
			</ul>
			<div class="union-station">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="tour-requirements">
			<div class="tour-requirements-blue">
				
			</div>
			<div class="tour-requirements-white">
				<div class="icon">
					<img src="">
				</div>
				<ul class="tour-requirements-text">
					<li>
						Walks are held rain or shine, but may be cancelled for severe wheather.
					</li>
					<li>
						A minimum of 3 people is required for the tour to run. In the event that the tour is cancelled, we will contact you 24 hours before the commencement of your tour.
					</li>
				</ul>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
<?break;
	default:
		'no page found';
		break;
}
?>






