<?php 
        // the query
        //get all post
        //$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));

        //get # of posts
        //$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3));

        //get posts from category
        $wpb_all_query = new WP_Query(array('category_name' => 'news', 'posts_per_page' =>-1));

    ?>

    <!-- the loop -->
    <?php
          while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
          $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium');
          ?>


<div class="col-md-6">
        

      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0"><?php the_title(); ?></h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto text-truncate"><?php the_excerpt(__('(more…)')); ?></p>
          <a href="<?php the_permalink(); ?>" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-lg-block">
          <img class="bd-placeholder-img" width="350" height="250" src="<?php echo $featured_img_url; ?>">

        </div>
      </div>
      
</div>
<?php endwhile; ?>