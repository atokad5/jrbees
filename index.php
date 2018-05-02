<?php get_header(); ?>
<?php $root = get_template_directory_uri() ; ?>

<header class="is-home">
  <div class="inner has-height"> 
    <div class="inner-content--hdr">
      <div class="inner-container--hdr">
        <h1>LICENSED BEE REMOVAL SERVICE</h1>
        <p>Here is some body copy to populate here. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque officia repellat commodi animi reprehenderit. Eum esse culpa ratione animi quasi asperiores, doloremque sapiente ad consequatur iste rerum debitis amet incidunt?</p>
        <a href="" class="cta">SCHEDULE TODAY!</a>
      </div>
    </div>
  </div>

  <div class="bottom-items--hdr">
    <div class="inner-bottom">
      <div class="inner">
        <div class="save"><a href="">Save Today <span></span></a></div>
        <div class="est">EST 2016 <span></span></div>
      </div>
    </div>
  </div>
  <div class="is-hero--bg" style="background-image: url(<?php echo "$root/dist/images/home-hero.jpg"; ?>);"></div>
</header>

<?php get_footer(); ?>