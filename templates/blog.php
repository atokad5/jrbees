<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<div class="spacer"></div>
<header class="standard--hdr">
	<div class="inner">
		<div class="hdr--group--default ">
			<div class="hdr--liner-default group--hdr">
				<?php the_field('header_content'); ?>
			</div>
		</div>
	</div>

	<div class="is-hero--bg is-bg" data-bg-src="<?php the_field('header_background'); ?>"></div>
</header>

<?php $featuredBlog = get_field('featured_blog_one', 'options'); ?>
<?php $featuredImg  = get_field('featured_header', $featuredBlog->ID ); ?>
<?php $featuredUrl  = get_permalink($featuredBlog->ID); ?>

<?php $featuredBlogTwo = get_field('featured_blog_two', 'options'); ?>
<?php $featuredImgTwo  = get_field('featured_header', $featuredBlogTwo->ID ); ?>
<?php $featuredUrlTwo  = get_permalink($featuredBlogTwo->ID); ?>



<main>
<section class="is-parent-el--padding no-padding-btm">
	<div class="inner">
		<div class="featured-section--blog">
			<h1>Featured Blogs</h1>
			<div class="blog-featured">
				 <div class="featured-article--inner">
		        <h1><?php echo $featuredBlog->post_title; ?></h1>
		        <a href="<?php echo $featuredUrl; ?>" class="cta">Read Story</a>
		      </div>
		      <div class="is-hero--bg is-bg" data-bg-src="<?php echo $featuredImg['url']; ?>"></div>

			</div>
			<div class="blog-featured">
				
				 <div class="featured-article--inner">
	        <h1><?php echo $featuredBlogTwo->post_title; ?></h1>
	       
	        <a href="<?php echo $featuredUrlTwo; ?>" class="cta">Read Story</a>
	      </div>
	      <div class="is-hero--bg is-bg" data-bg-src="<?php echo $featuredImgTwo['url']; ?>"></div>
			</div>
		</div>
	</div>
	<div class="inner content-area">


		<?php 
		$getPost = new WP_Query(array( 
			'post_type' => 'post'

		));
		if($getPost -> have_posts()) : while($getPost -> have_posts()) : $getPost -> the_post();
			$image = get_field('featured_header');
		?>
		<div class="blog-content">
			<div class="blog-content--inner">
					<a href="<?php the_permalink(); ?>">
				 	<figure class="galleryImg">
						<img class="lazy-image is-gallery-image" src="" data-lazy="<?php echo $image['url'] ;?>" data-width="<?php echo $image['width'];  ?>" data-height="<?php echo $image['height']; ?>">
					</figure>
				</a>
				<h1 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<small>posted on: <?php the_date('F y Y') ?></small>
				<div class="summary"><?php the_excerpt(''); ?></div>
			</div>
		</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>

	</div>
</section>

<?php get_footer(); ?>