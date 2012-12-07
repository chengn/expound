<?php $related_posts = wpmag_get_related_posts(); ?>
<?php if ( $related_posts->have_posts() ) : ?>
<div class="related-content">
		<?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'mag-mini' ); ?></a>
			</div>
			<?php endif; ?>

			<header class="entry-header">
				<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'mag' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			</header><!-- .entry-header -->

		</article>

	<?php endwhile; ?>
</div>
<?php endif; // have_posts() ?>