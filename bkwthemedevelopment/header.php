
<!DOCTYPE html>
<html <?php language_attributes() ?>>
  <head>
    <meta <?php bloginfo('charset'); ?>
    <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <div id="slideout-menu">
        <ul>
            <li><a href="<?php echo site_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
            <li><a href="blogslist.html">Blog</a></li>
            <li>  <a href="blogslist.html"></a></li>
            <li><a href="<?php echo site_url('/about-us'); ?>">About</a>  </li>
            <li><input type="text" placeholder="Search Here">  </li>
        </ul>
    </div>

    <nav>
        <div id="logo-img">
            <a href="<?php echo site_url(); ?>">
                <p>bwk theme development</p>
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li><a class="active" href="<?php echo site_url(); ?>">Home</a></li>
            <li><a href="<?php echo site_url('/about-us'); ?>">About Us</a></li>
            <li><a href="blogslist.html">Blog</a></li>
            <li <?php if (get_post_type() == 'project') echo 'class="current-menu-item"'; ?>><a href="<?php echo get_post_type_archive_link('project') ?>">Projects</a></li>
            <li><a href="about.html">Programs</a></li>
            <li><div id="search-icon"><i class="fas fa-search"></i></div></li>
        </ul>
    </nav>

    <div id="searchbox">
        <input type="text" placeholder="Search Here">
    </div>
