

<?php
get_header(); ?>
    <div style="background-image: url(<?php echo get_theme_file_uri('/img/3.jpg'); ?>)" id="banner">
        <h1>&lt; BWKDevelopment/ &gt;</h1>
        <h2>Welcome!</h2>
        <p>To Benson web development where we meet all tech support on web development.We develop custom wordpress
        theme and manage them for you to let you focus on other important activities on your organization. </p>
        <h3><a href="#">Learn More &raquo; &raquo;</a></h3>
    </div>

    <main style="">
        <a href="blogslist.html">
            <h2 class="section-heading">Blog Listing</h2>
        </a>
        <section>
          <?php
          $homepageposts = new WP_Query(array(
            'posts_per_page' => 2
          ));
              while ($homepageposts->have_posts()) {
              $homepageposts->the_post(); ?>
              <div class="card">
                  <div class="card-image">
                      <a href="blogpost.html">
                          <img src="<?php echo get_theme_file_uri('img/1.jpg') ?>" alt="Card Image">
                      </a>
                  </div>

                  <div class="card-description">
                      <a href="<?php the_permalink(); ?>">
                          <h3><?php the_title(); ?></h3>
                      </a>
                      <div style="margin: 1rem 0;" class="card-meta">
                        Posted by <?php the_author_posts_link(); ?> on &nbsp;<?php the_time('F j,Y'); ?> at <?php the_time('g:i A'); ?> in
                        <a href="#"><?php echo get_the_category_list('and'); ?></a>
                      </div>
                      <p><?php echo wp_trim_words(get_the_content(),30); ?></p>
                      <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                  </div>
              </div>
            <?php  } wp_reset_postdata(); ?>


        </section>

        <div class="view-all">
          <a href="<?php echo site_url('/blog'); ?>"> <button>View All Blogs</button></a>
         </div>

        </div>

        <a href="blogslist.html">
        	<h2 class="section-heading">Upcoming Projects</h2>
    	</a>
        <section>
          <?php
          $today = date('Ymd');
          $homePageEvents = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'project',
            'meta_key' => 'project_date',
            'orderby' => 'meta_value_num',
            'meta_query' => array(
              array(
                'key' => 'project_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            ),
            'order' => 'ASC'
          ));
          while ($homePageEvents->have_posts()) {
             $homePageEvents->the_post(); ?>
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
          <?php } ?>
        </section>
        <div class="view-all">
          <a href="<?php echo site_url('/project'); ?>"> <button>View All Projects</button></a>
         </div>



<?php
get_footer();
 ?>
