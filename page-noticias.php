
  <body>
  <?php get_header(); ?>


 
  <main class="mw-100">
    
  <div class="p-4 p-md-1 mb-4 text-white  bg-white text-center portada-news">
  <?php 
       

        //get posts from category
        $wpb_all_query = new WP_Query(array('category_name' => 'noticias', 'posts_per_page' =>1));

    ?>

    <!-- the loop -->
    <?php
          while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
          $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium');
          ?>

    <img src="<?php echo $featured_img_url; ?>" class="rounded w-100" alt="">
    
  </div>
  </main>
  <div class="container mw-75 col px-0 text-center">
      <h2><?php the_title(); ?> </h2>
      <h5><?php the_excerpt(__('(more…)')); ?></h5>
      <p><a href="<?php the_permalink(); ?>" class="fw-bold">Continuar leyendo...</a></p>
      <?php endwhile; ?>
    </div>
    <main class="container mw-75">
  
    <div class="mt-2">
  <div class="col-12 TextoTitulos">
         <h2 class = "trending">Noticias</h2>
         <p class="Lineas-news rounded">
         </p>  
  </div>
  </div>

  <div class="row mb-2">


    <?php
        get_template_part('includes/noticias'); 
      ?>
    
  </div>

  

</main>

  </body>

<?php get_footer(); ?>