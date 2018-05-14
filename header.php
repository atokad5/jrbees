<?php $root = get_template_directory_uri() ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo "$root/dist/css/style.css"; ?> ">
  
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php 
  $home = is_page_template('templates/home.php'); 
  $services = is_page_template('templates/services.php'); 
  $faq = is_page_template('templates/faq.php'); 
?>


<nav class="<?php if(!$home) echo "is-fixed" ;?>">
  <?php if($home) { ?> 
    <div class="is-y">
    <div class="inner">
      <div class="signup">
        <form action="https://crosskeydesigns.us1.list-manage.com/subscribe/post?u=dd25a7dace2f20cdfbf03f522&id=b50cdbe23c" class="navbar-form mcFormsNav">
          <label for="email-bar">Get Up-to-date on Bee Related News</label>
          <span class="email-container">
            <input id="email-bar" type="email" name="EMAIL" placeholder="Email Address">
            <input type="hidden" name="" class="honeypot">
          </span>
          <input type="submit" value="Sign Up">
        </form>
      </div>
      <svg class="email-bar--close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
    </div>
  </div>
  <?php } ?>
  <div class="main-nav">
    <div class="inner">
      
      <div class="nav--section is-top--section">
        <div class="site--name">
          <h1><a href="<?php echo site_url(''); ?>">JR BEES</a></h1>
        </div>

        <button class="mt-trigger">
          <span class="sr-only">Menu</span>
          <span class="mt-top"></span>
          <span class="mt-mid"></span>
          <span class="mt-btm"></span>
        </button>
      </div>
      <div class="nav--section is-nav">
        <div class="nav-parent">
          <ul class="the-menu">
            <li><a href="<?php echo site_url(''); ?>" class="<?php if($home) { echo "active"; } ?>">Home</a></li>

            <li><a href="<?php echo site_url('services'); ?>" class="<?php if($services) { echo "active"; } ?>">Services</a></li>
            <li><a href="<?php echo site_url('faq'); ?>" class="<?php if($faq) { echo "active"; } ?>">FAQ</a></li>
            <li><a href="">Photo Album</a></li>
            <li><a href="">Contact Today</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>

</nav>


