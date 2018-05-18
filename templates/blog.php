<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>

<section class="is-parent-el--padding no-padding-btm">
	<div class="inner content-area">
		<?php 
		$getPost = new WP_Query(array( 
			'post_type' => 'post'

		));
		if($getPost -> have_posts()) : while($getPost -> have_posts()) : $getPost -> the_post();
		?>
		<div class="blog-content">

			<h1 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<small>posted on: <?php the_date('F y Y') ?></small>
			<div class="summary"><?php the_excerpt(''); ?></div>
		</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>

	</div>
</section>

<?php get_footer(); ?>