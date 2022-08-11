<?php
get_header();
while (have_posts()) {
  the_post(); ?>
  <div  style="background-image: url(<?php echo get_theme_file_uri('/img/3.jpg'); ?>)"  id="about-banner">
     <h2><?php the_title(); ?></h2>
     <p>Learn more about services we offer among other information about us.</p>
     <div class="about-banner-crump">
       <h4><i class="fa fa-home" aria-hidden="true"></i><a href="<?php echo site_url('/blog'); ?>">
          Blog Home</a></h4>
       <h4><a href="#">Posted by <?php the_author_posts_link(); ?> on &nbsp;<?php the_time('n.j.y'); ?> at
       <?php the_time('g:i A'); ?> in
       <a href="#"><?php echo get_the_category_list('and'); ?></a></a></h4>
   </div>
 </div>
 <section>
   <div style="width: 70%;" class="card">

    <div style="margin-top: 3rem;" class="card-description">
          <a href="<?php the_permalink(); ?>">
          </a>

          <div class="card-image">
            <a href="blogpost.html">
               <img style="height: 20rem; width: 50rem; margin-bottom: 1rem;" src="<?php echo get_theme_file_uri('img/1.jpg'); ?>" alt="Card Image">
             </a>
           </div>
          <p> <?php the_excerpt(); ?> </p>
        </div>
  </div>
 </section>
<?php }

get_footer();
 ?>
