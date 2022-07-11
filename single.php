<?php get_header(); ?>


<body>
 

  <div class="container-fluid">

    <!-- EVENTO HOME-->
    <div class="row section-evento">
      <div class="col-6 responsive-evento">

        <a href="#">

          <div class="evento-main">
          <?php
                  // Start the loop.
                  while ( have_posts() ) : the_post();
            
                  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium');
                  //thumbnail, medium, large, full
              ?>

            <img class="evento-main-AjustarImage" 
            src="<?php echo $featured_img_url; ?>" alt="">
            </img>
          </div>

        </a>

      </div>
      <!--<hr class="barra-evento">-->

      <div class="col-6 fondo-txt-evento-main " id="">

        <div class="col-12  info-critic">

          <div class="evento-title"><h1 ><?php the_title(); ?></h1><br></div>

          
          <h1 class="evento-subtitle"><?php the_content(); ?></h1>
        </div>

      </div>
      <?php
                  // End the loop.
                   endwhile;
                ?>
    </div>
    <!-- EVENTO END-->

    <!-- SIMILAR Reviews-->
    <div class="row position">
      <div class="col-12 ">
        <h2 class="relacionados">This might interest you!</h2>
      </div>

      <?php
        get_template_part('includes/reviewsPost'); 
        get_template_part('includes/newsR'); 
      ?>

      

      <!--AQUI TERMINA EL ROW-->

    </div>
  </div>
  <!--aqui termina el container fluid-->
</body>


<?php get_footer(); ?>