<?php $root = get_template_directory_uri(); ?>




<?php get_template_part('partials/pre-footer'); ?>

</main>

<?php 
  $home = is_page_template('templates/home.php'); 
  $services = is_page_template('templates/services.php'); 
  $faq = is_page_template('templates/faq.php'); 
  $album = is_page_template('templates/photoalbum.php'); 
  $contact = is_page_template('templates/contact.php'); 
  $blog = is_page_template('templates/blog.php'); 
?>

<footer>
  <?php $showLink = get_field('show_featured_link', 'options'); ?>
  <?php if($showLink) { ?>
  <div class="save-today">
    <div class="inner is-centered">
      <a href="<?php the_field('home_page_mini_link', 'options'); ?>"> <?php the_field('home_page_mini_link_text' , 'options'); ?>  </a>
    </div>
  </div>
  <?php } ?>


  <div class="footer">
    <div class="inner">
      <div class="three-col--footer">
        <div class="foot-el">
          <ul class="footer_links">
           <!-- Javascript injects header nav links here -->
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