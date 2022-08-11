
<?php
get_header(); ?>
<div  style="background-image: url(<?php echo get_theme_file_uri('/img/3.jpg'); ?>)"  id="about-banner">
   <h2>All Projects</h2>
   <p>View all our completed projevts and customers review</p>
</div>
<div class="blogs-headers">
  <h1>Our Completed Projets</h1>
 </div>
<section>
 <?php
 while (have_posts()) {
   the_post(); ?>
   <div class="card">
       <div class="card-image">
           <a href="blogpost.html">
               <img src="<?php echo get_theme_file_uri('img/3.jpg') ?>" alt="Card Image">
           </a>
       </div>

       <div class="card-description">
           <a href="<?php the_permalink(); ?>">
               <h3><?php the_title(); ?></h3>
           </a>
           <div style="margin: 10px 0;" class="card-meta">
             Project Date: <?php
             $projectDate = new DateTime(get_field('project_date'));
             echo $projectDate->format('j,F  Y');
              ?>
           </div>
           <p><?php echo wp_trim_words(get_the_content(),25); ?></p>
           <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
       </div>
   </div>
<?php  }

  ?>

</section>
<div class="paginate-links">
<?php echo paginate_links(); ?>
</div>

<?php get_footer(); ?>
