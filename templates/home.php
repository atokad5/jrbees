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
    <h1>This is a Title</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias exercitationem nostrum minima ipsum aspernatur perspiciatis tenetur velit sapiente? Consequuntur ratione omnis eaque error placeat veritatis odio libero? Accusamus, sed repudiandae.</p>
  </section>
</main>
<?php get_footer(); ?>