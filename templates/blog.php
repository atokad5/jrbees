<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>

<section class="is-parent-el--padding no-padding-btm">
	<div class="inner">
		<?php $posted = new WP_Query();

		if($posted -> have_posts()) : while($posted -> have_posts()) : $posted -> the_post();
		?>
		
		<?php echo the_content(); ?>

	<?php endwhile; endif;  wp_reset_postdata(); ?>
	</div>
</section>

<?php get_footer(); ?>