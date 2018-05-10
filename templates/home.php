<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>
<?php $root = get_template_directory_uri() ; ?>

<header class="is-home">
  <div class="inner has-height"> 
    <div class="inner-content--hdr">
      <div class="inner-container--hdr">
       <div class="group--hdr">
        <h1>LICENSED BEE REMOVAL SERVICE</h1>
          <p>Here is some body copy to populate here. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque officia repellat commodi animi reprehenderit. Eum esse culpa ratione animi quasi asperiores, doloremque sapiente ad consequatur iste rerum debitis amet incidunt?</p>
          <a href="" class="cta">
            <span class="link-text">SCHEDULE TODAY!</span>
            <span class="sleeve-link"></span>
          </a>
       </div>
      </div>
    </div>
  </div>

  <div class="bottom-items--hdr">
    <div class="inner-bottom">
      <div class="inner">
        <div class="save is-fade"><a href="">Save Today <span></span></a></div>
        <div class="est is-fade">EST 2016 <span></span></div>
      </div>
    </div>
  </div>
  <div class="is-hero--bg is-bg" data-bg-src="<?php echo "$root/dist/images/home-hero.jpg"; ?>"></div>
  
</header>


<main>
  <section class="is-parent-el--padding is-centered">
    <div class="inner">
      <div class="hdr--group">
        <h1>This is a Title</h1>
        <h4>This is a Subheader</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quis aperiam laudantium illum quo ab distinctio quidem aspernatur repellat exercitationem?</p>
      </div>
    </div>
  </section>

  <section class="two-column-grid">
    <div class="inner">
      <div class="grid-of-two is-black">
        <div class="has-two-column has-image">
          <figure class="has-lazy-image">
            <img class="lazy-image" data-lazy="<?php echo "$root/dist/images/imageone.jpg" ; ?>" alt="">
          </figure>
        </div>
        <div class="has-two-column has-content">
          <div class="has-content--inner">
            <h2>This is a Title</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ipsam omnis ullam, optio rem molestiae in officia nostrum dolor dolorem. Architecto corporis facilis illum dignissimos cum quos quia quo aliquam?</p>
          </div>
        </div>
      </div>

      <div class="grid-of-two is-black is-reversed">
        <div class="has-two-column has-image">
          <figure class="has-lazy-image">
            <img class="lazy-image" data-lazy="<?php echo "$root/dist/images/imagetwo.jpg" ; ?>" src="" alt="">
          </figure>
        </div>
        <div class="has-two-column has-content">
          <div class="has-content--inner">
            <h2>This is a Title</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ipsam omnis ullam, optio rem molestiae in officia nostrum dolor dolorem. Architecto corporis facilis illum dignissimos cum quos quia quo aliquam?</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="is-parent-el--padding is-centered">
    <div class="inner">
      <div class="hdr--group">
        <h1>This is a Title</h1>
        <h4>This is a Subheader</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quis aperiam laudantium illum quo ab distinctio quidem aspernatur repellat exercitationem?</p>
      </div>
    </div>
  </section>

  <?php $icons = array( "thumbsup", "shield", "notepage", "check"); ?>

  <section class="facts no-padding-top">
    <div class="inner">
      <?php for($i = 0; $i < 4; $i++) { ?>
        <div class="two-col--facts">
          <div class="is-facts--section is-section--icon">
            <?php get_template_part('dist/images/'.$icons[$i]); ?>
          </div>
          <div class="is-facts--section is-section--content">
            <h2>This is a Title</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore nisi aliquid in quisquam asperiores rem, voluptas porro. Ex aperiam facilis, non corporis iste nesciunt vero, optio cumque dicta perferendis ratione.</p>
          </div>
        </div>
      <?php } ?>  
    </div>
  </section>


  



<?php get_footer(); ?>