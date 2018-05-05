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

<?php $home = is_page_template('templates/home.php'); ?>


<nav>
  <div class="is-y">
    <div class="inner">
      <div class="signup">
        <form action="" class="navbar-form">
          <label for="email-bar">Get Up-to-date on Bee Related News</label>
          <span class="email-container">
            <input id="email-bar" type="email" placeholder="Email Address">
          </span>
          <input type="submit" value="Sign Up">
        </form>
      </div>
      <svg class="email-bar--close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
    </div>
  </div>
  <div class="inner">
    <div class="nav--section is-top--section">
      <div class="site--name">
        <h1>JR BEES REMOVAL</h1>
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
          <li><a href="" class="<?php if($home) { echo "active"; } ?>">Home</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">FAQ</a></li>
          <li><a href="">Photo Album</a></li>
          <li><a href="">Contact Today</a></li>
        </ul>
      </div>
    </div>
  </div>

</nav>


