<?php $root = get_template_directory_uri(); ?>


<section class="is-parent-el--padding">
  <div class="inner">
  
    <?php $featuredBlog = get_field('featured_blog_one', 'options'); ?>
    <?php $featuredImg  = get_field('featured_header', $featuredBlog->ID ); ?>
    <?php $featuredUrl  = get_permalink($featuredBlog->ID); ?>

    <div class="featured-article">
      <div class="featured-article--inner">
      <?php the_field('box_one_content', 'options') ?>
          <a href="<?php the_field('box_one_cta_link' , 'options'); ?>" class="cta">
            <?php the_field('box_one_cta_link_text', 'options'); ?>
          </a>
      </div>
      <div class="is-hero--bg is-bg" data-bg-src="<?php echo $featuredImg['url']; ?>"></div>
    </div>



    <div class="two-cta--section">

      <div class="is-cta-el">
        <div class="is-cta--liner">
          
          <h1><?php echo $featuredBlog->post_title; ?></h1>
        <div class="featured-article-excerpt">
          <?php echo $featuredBlog->post_content; ?>
        </div>
        <a href="<?php echo $featuredUrl; ?>" class="cta">Read Story</a>
        </div>
      </div>

      <div class="is-cta-el is-centered">
        <div class="is-cta--liner">
          <?php the_field('box_two_content', 'options') ?>
          <div class="form-cta">
            <form class="mcForms" action="https://JRBees.us18.list-manage.com/subscribe/post?u=ff7dd6267f87b5edda4f367c4&id=431a0702bc">
              <div class="inputTwo">
                <input type="email" name="EMAIL" placeholder="email@gmail.com">
                <input type="hidden" name="" class="honeypot">
                <button class="arrow-btn" type="submit">
                <svg width="29px" height="24px" viewBox="0 0 29 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                    <g id="Desktop-HD" transform="translate(-1277.000000, -3896.000000)" stroke="#FFFFFF" stroke-width="4">
                      <g id="arrow-right" transform="translate(1279.000000, 3898.000000)">
                        <path d="M0,10.5 L24,10.5" id="Shape"></path>
                        <polyline id="Shape" points="15 0 25 10 15 20"></polyline>
                      </g>
                    </g>
                  </g>
                </svg>
                </button>
              </div>
              <div class="msg"></div>
            </form>
          </div>
          
        </div>
        <div class="is-hero--bg is-bg" data-bg-src="<?php echo "$root/dist/images/cta.jpg"; ?>"></div>
      </div>
    
    </div>
    

  </div>
</section>