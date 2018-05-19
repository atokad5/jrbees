<?php 
	get_header();

 ?>

<?php $image = get_field('featured_header'); ?>
<div class="spacer"></div>
<header class="standard--hdr">
	<div class="inner">
		<div class="hdr--group--default ">
			<div class="hdr--liner-default group--hdr">
				<h1><?php the_title(); ?></h1>
				<p>By Jesse Adcock</p>
			</div>
		</div>
	</div>

	<div class="is-hero--bg is-bg" data-bg-src="<?php echo $image['url'];?>"></div>
</header>
<main>


	<section class="is-parent-el--padding no-padding-btm">
	<div class="inner content--area--large is-left">
			<div class="column-blog column-large">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<?php the_content(); ?>
	<?php endwhile; endif; wp_reset_postdata(); ?>

		<div class="back-btn">
			<a href="<?php echo site_url('blog'); ?>" class="cta">View All Blogs</a>
		</div>
		</div>

		<div class="column-blog column-small">
			sidebar
		</div>

		
	</div>

	
</section>


 <?php get_footer(); ?>