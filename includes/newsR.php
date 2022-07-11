<?php 
        // the query
        //get all post
        //$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));

        //get # of posts
        //$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3));

        //get posts from category
        $wpb_all_query = new WP_Query(array('category_name' => 'news', 'posts_per_page' =>2));

    ?>

    <!-- the loop -->
    <?php
          while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
          $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium');
          ?>

<div class="col-3">

<a href="<?php the_permalink(); ?>">

  <div class="relacionado-1">
    <img class="relacionado_AjustarImage" src="<?php echo $featured_img_url; ?>" alt="">
  </div>

</a>

<div class="txt-background">
  <p class="relacionado-title"><?php the_title(); ?></p>
  <div class = "text-truncate relacionado-subtitle "><?php the_excerpt(__('(more…)')); ?></div>
  
</div>

</div>

<?php endwhile; ?>