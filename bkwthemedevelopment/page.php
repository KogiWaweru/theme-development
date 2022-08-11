<?php
get_header();

while (have_posts()) {
  the_post(); ?>
  <div  style="background-image: url(<?php echo get_theme_file_uri('/img/3.jpg'); ?>)"  id="about-banner">
     <h2><?php the_title(); ?></h2>
     <p>Learn more about services we offer among other information about us.</p>
     <?php
     $parent = wp_get_post_parent_id(get_the_id());
       if ($parent) { ?>
         <div class="about-banner-crump">
           <h4><i class="fa fa-home" aria-hidden="true"></i><a href="<?php echo get_permalink($parent); ?>">Back to
              <?php echo get_the_title($parent); ?></a></h4>
           <h4><a href="#"><?php the_title(); ?></a></h4>
       </div>
    <?php }
      ?>
 </div>
  <main>

    <h2 class="page-heading"><?php the_title(); ?></h2>
    <div id="post-container">
      <section id="blogpost">
        <div class="card">
          <!-- <div class="card-image">
            <img src="<?php //echo get_theme_file_uri('img/1.jpg'); ?>" alt="Card Image">
          </div> -->
          <div class="card-description">
            <h3><?php the_title(); ?></h3>
            <p> <?php the_content(); ?></p>
          </div>
        </div>

      </section>

        <?php
        $testArray = get_pages(array(
          'child_of' => get_the_ID()
        ));
        if ($parent OR $testArray) { ?>
      <aside id="sidebar">
        <h3> <a href="<?php echo get_permalink($parent); ?>"><?php echo get_the_title($parent); ?></a> </h3>
        <ul>
            <?php
            if($parent){
              $findChildOf = $parent;
            } else {
              $findChildOf = get_the_ID();
            }
              wp_list_pages(array(
                'title_li' => null,
                'child_of' => $findChildOf
              ))
             ?>
        </ul>
      </aside>

    <?php } ?>
    </div>
<?php } ?>
</main>
<?php
get_footer();
 ?>
