<?php /* Template Name: Contact Page */ ?>
<?php $root = get_template_directory_uri(); ?>
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
<main>

	<div class="contact-nav--el">
		<section class="contact-nav">
			<div class="inner">
				<ul>
					<li><a href="tel:<?php the_field('phone_number', 'options'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg><?php the_field('phone_number', 'options'); ?></a></li>
					<li><a href="mailto:<?php the_field('email_address', 'options') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><?php the_field('email_address', 'options') ?></a></li>
				</ul>
			</div>
		</section>
		<section class="contact-nav is-fixed-nav--el">
			<div class="inner">
				<ul>
					<li><a href="tel:<?php the_field('phone_number', 'options'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg><?php the_field('phone_number', 'options'); ?></a></li>
					<li><a href="mailto:<?php the_field('email_address', 'options') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><?php the_field('email_address', 'options') ?></a></li>
				</ul>
			</div>
		</section>
	</div>



	<section class="content--group is-parent-el--padding no-padding-btm">
		<div class="inner">
			<div class="content--area has-form">
				<h1 class="yelp-title">Most Recent Yelp Reviews</h1>
				<div class="review-nest">
				
				
				</div>


				<div class="form-content">
					<?php the_field('contact_text'); ?>
					<?php $showSocial = get_field('show_social'); ?>
					<?php if($showSocial) { ?>
						<div class="social--icons">
							<ul>
								<li><a href="https://www.facebook.com/JRBeesLLC/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a></li>
								<li><a href="https://www.instagram.com/j_r_bees_llc/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line></svg></a></li>
								<li><a href="https://www.linkedin.com/in/jesse-adcock-9735a5106?trk=nav_responsive_tab_profile_pic"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></a></li>
							</ul>
						</div>
					<?php } ?>
				</div>
		
				<?php echo do_shortcode('[contact-form-7 id="280" title="Contact form 1"]'); ?>
					<!-- <?php while ( have_posts() ) : the_post(); ?>			
					<?php the_content();  ?>
					<?php endwhile;  wp_reset_postdata(); ?> -->
			</div>
		</div>
	</section>




<?php get_footer(); ?>