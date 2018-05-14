<?php $root = get_template_directory_uri(); ?>

<?php get_template_part('partials/pre-footer'); ?>
</main>



<footer>
  <div class="save-today">
    <div class="inner is-centered">
      <a href="">SAVE 20% TODAY FOR ALL BEE SERVICES  </a>
    </div>
  </div>

  <div class="footer">
    <div class="inner">
      <div class="three-col--footer">
        <div class="foot-el">
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Photo Album</a></li>
            <li><a href="">Faq</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Contact</a></li>
          </ul>
        </div>
        <div class="foot-el">
          <div class="outer-logo-container">
            <figure class="footer-logo">
              <img class="lazy-image" src="" data-lazy="<?php echo "$root/dist/images/logo.png";?>" alt="jr bees logo">
            </figure>
            &copy; <?php echo date('Y'); ?>
          </div>
        </div>
        <div class="foot-el">
          <ul>
            <?php 
              $socialLinks = get_field('social_urls', 'options');
              foreach($socialLinks as $theLink) { ?>
                <li><a href="<?php echo $theLink['social_link']; ?>"><?php echo $theLink['social_link_text']; ?></a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>


</footer>
<script src="<?php echo "$root/dist/bundle.js"; ?> "></script>
<?php wp_footer(); ?>
</body>
</html>