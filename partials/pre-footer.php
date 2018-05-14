<?php $root = get_template_directory_uri(); ?>


<section class="is-parent-el--padding">
  <div class="inner">
    <div class="two-cta--section">

      <div class="is-cta-el">
        <div class="is-cta--liner">
          <?php the_field('box_one_content', 'options') ?>
          <a href="<?php the_field('box_one_cta_link' , 'options'); ?>" class="cta">
            <?php the_field('box_one_cta_link_text', 'options'); ?>
          </a>
        </div>
      </div>

      <div class="is-cta-el is-centered">
        <div class="is-cta--liner">
          <?php the_field('box_two_content', 'options') ?>
          <div class="form-cta">
            <form class="mcForms" action="https://crosskeydesigns.us1.list-manage.com/subscribe/post?u=dd25a7dace2f20cdfbf03f522&id=b50cdbe23c">
              <div class="input">
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