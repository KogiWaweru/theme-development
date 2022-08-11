<?php
get_header(); ?>
<div  style="background-image: url(<?php echo get_theme_file_uri('/img/3.jpg'); ?>)"  id="about-banner">
   <h2><?php the_archive_title(); ?></h2>
   <p><?php the_archive_description(); ?></p>
</div>
<div class="blogs-headers">
  <h1>Our Blog Posts</h1>
 </div>
<section>
 <?php
 while (have_posts()) {
   the_post(); ?>
   <div class="card">
   <div class="card-image">
     <a href="blogpost.html">
        <img src="<?php echo get_theme_file_uri('img/1.jpg'); ?>" alt="Card Image">
      </a>
    </div>
    <div class="card-description">
          <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
          </a>
          <div class="card-meta">
            Posted by <?php the_author_posts_link(); ?> on &nbsp;<?php the_time('F j,Y'); ?> at <?php the_time('g:i A'); ?> in
            <a href="#"><?php echo get_the_category_list('and'); ?></a>
          </div>
          <p> <?php the_excerpt(); ?> </p>
          <a href="<?php the_permalink(); ?>" class="btn-readmore">Continue Reading</a>
        </div>
  </div>
<?php  }

  ?>

</section>
<div class="paginate-links">
<?php echo paginate_links(); ?>
</div>

<?php get_footer(); ?>
