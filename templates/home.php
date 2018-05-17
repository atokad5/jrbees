<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>
<?php $root = get_template_directory_uri() ; ?>

<header class="is-home">
  <div class="inner has-height"> 
    <div class="inner-content--hdr">
      <div class="inner-container--hdr">
       <div class="group--hdr">
        <?php the_field('header_text'); ?>
          <a href="<?php the_field('header_call_to_action') ;?>" class="cta">
            <span class="link-text"><?php the_field('header_call_to_action_text'); ?></span>
            <span class="sleeve-link"></span>
          </a>
       </div>
      </div>
    </div>
  </div>

  <div class="bottom-items--hdr">
    <div class="inner-bottom">
      <div class="inner">
        <div class="save is-fade"><a href="<?php the_field('lower-link'); ?>"><?php the_field('lower-link-text'); ?> <span></span></a></div>
        <div class="est is-fade"><?php the_field('est'); ?><span></span></div>
      </div>
    </div>
  </div>
  <div class="is-hero--bg is-bg" data-bg-src="<?php the_field('header_background'); ?>"></div>
  
</header>


<main>
  <section class="is-parent-el--padding is-centered">
    <div class="inner">
      <div class="hdr--group">
        <?php the_field('first_section_content') ;?>
      </div>
    </div>
  </section>

  <section class="two-column-grid">
    <div class="inner">
      <?php 
        $gridItems = get_field('features');
        $count = 0;
        foreach($gridItems as $contentItem) { 
        $count++;
        $dynClass = $count % 2 === 0 ? 'is-reversed' : '';
      ?>

      <div class="grid-of-two is-black <?php echo $dynClass; ?>">
        <div class="has-two-column has-image">
          <figure class="has-lazy-image">
            <img class="lazy-image" data-lazy="<?php echo $contentItem['image']; ?>" alt="">
          </figure>
        </div>
        <div class="has-two-column has-content">
          <div class="has-content--inner">
            <?php echo $contentItem['content']; ?>
          </div>
        </div>
      </div>

    <?php } ?>

    </div>
  </section>

  <section class="is-parent-el--padding is-centered">
    <div class="inner">
      <div class="hdr--group">
        <?php the_field('offers_lead_in'); ?>
      </div>
    </div>
  </section>

  <?php $icons = array( "thumbsup", "shield", "notepage", "check"); ?>


  <section class="facts no-padding-top">
    <div class="inner">
      <?php 
        $facts = get_field('facts'); 
        forEach($facts as $factsEl) { ?>
        <div class="two-col--facts">
          <div class="is-facts--section is-section--icon">
            <?php get_template_part('dist/images/'.$factsEl['icon']); ?>
          </div>
          <div class="is-facts--section is-section--content">
            <?php echo $factsEl['facts_content']; ?>
          </div>
        </div>
      <?php } ?>  
    </div>
  </section>


  



<?php get_footer(); ?>