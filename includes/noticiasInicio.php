<?php 
        //get posts from category
        $wpb_all_query = new WP_Query(array('category_name' => 'noticias', 'posts_per_page' =>3));

    ?>

    <!-- the loop -->
    <?php
          while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
          $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          ?>

<div class="col trending_padding_content">

<div class=" img_aling">   
  
<div class="img_Ajustar">
  <img src="<?php echo $featured_img_url; ?>" alt="...">
</div>
  <div class="card-body titulo_img_trending">
  <h4><?php the_title(); ?></h4>
    <p class="card-text"><?php the_excerpt(__('(more…)')); ?></p>
    <div class="d-flex justify-content-between align-items-center">
      <div class="btn-group">
      <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-secondary">View</a>
    </div>
    </div>
  </div>
</div>
</div>

<?php endwhile; ?>