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


<nav>
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
    <div class="nav--section">
      <ul class="the-menu">
        <li><a href="">Home</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">FAQ</a></li>
        <li><a href="">Photo Album</a></li>
        <li><a href="">Contact Today</a></li>
      </ul>
    </div>
  </div>

</nav>