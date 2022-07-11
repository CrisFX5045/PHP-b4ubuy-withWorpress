<?php 
        // the query
        //get all post
        //$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));

        //get # of posts
        //$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3));

        //get posts from category
        $wpb_all_query = new WP_Query(array('category_name' => 'horror', 'posts_per_page' =>-1));

    ?>

    <!-- the loop -->
          <?php
          while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
          $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          ?>

    <div class="col f-0">
        <div class="bg-black rounded img_AjustarContent">
          
          


          <div class="flip-card">
              <div class="flip-card-inner">

                <div class="flip-card-front">
                  <img src="<?php echo $featured_img_url; ?>" alt="Avatar" style="width:380px;height:400px;">
                </div>
                <div class="flip-card-back">
                    <h1><?php the_title(); ?></h1> 
                    <p><?php the_excerpt(__('(more…)')); ?></p> 
                    
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
                </div>
    
              </div>
     
            </div>
    
          </div>
          
    </div>

    <?php endwhile; ?>