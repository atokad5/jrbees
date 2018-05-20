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
				<p>By JR BEES</p>
			</div>
		</div>
	</div>
	<div class="is-hero--bg is-bg" data-bg-src="<?php echo $image['url'];?>"></div>
</header>
<main>

<div class="social-bar">
	<div class="is-social-bar">
		<div class="inner">
			<ul>
				<li>Share: </li>
				<li><a href="https://www.facebook.com/sharer/sharer.php?u=#jrbees" target="_blank">Facebook</a></li>
				<li><a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_page_link()) ;?>">Twitter</a></li>
				<li><a href="http://pinterest.com/pin/create/link/?url=<?php echo urlencode(get_page_link()) ;?>">Pinterest</a></li>
			</ul>
		</div>
	</div>
</div>

<section class="is-parent-el--padding no-padding-btm">
	<div class="inner content--area--large is-left">
		<div class="column-blog column-large">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<small><strong>Posted on <?php the_date(); ?></strong></small>
				<article><?php the_content(); ?></article>
			<?php endwhile; endif; wp_reset_postdata(); ?>
			<div class="back-btn">
				<a href="<?php echo site_url('blog'); ?>" class="cta">View All Blogs</a>
			</div>
		</div>

		<div class="column-blog column-small">
			<div class="recent-post-title"><h2>Recent Posts</h2></div>
			<ul class="recent-blogs">
			<?php $getArt = new Wp_Query(array(
				'post_type' => 'post',
				'posts_per_page' => 4
			)) ;
			if($getArt->have_posts()) : while($getArt->have_posts()) : $getArt->the_post();
			?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; endif; wp_reset_postdata(); ?>
		</ul>
		<div class="side-bar"><?php the_field('sidebar', 'options'); ?></div>
		</div>
	
	</div>
	
</section>


 <?php get_footer(); ?>