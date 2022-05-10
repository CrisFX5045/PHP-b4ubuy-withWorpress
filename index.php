<?php get_header(); ?>

<!--CAROUSELL-->
<section>
 <div class="bd-example">
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
  </div>

  <div class="carousel-inner">

    <!--IMG 1-->
    
    <div class="carousel-item"> 
    <a href="#">
   <img src="https://phantom-marca.unidadeditorial.es/7e22125719fb04734ea4cb8ac63ccb99/resize/1320/f/jpg/assets/multimedia/imagenes/2022/03/08/16467427208597.jpg" class=" w-100" alt="...">
   </a>
    </div>
    
    <!--IMG 2-->
    
    <div class="carousel-item active">  
      <a href="#">
    <img src="https://image.api.playstation.com/vulcan/ap/rnd/202110/2000/phvVT0qZfcRms5qDAk0SI3CM.png" class=" w-100 " alt="...">
    </a>
    <button type="button" class="btn btn-primary">VIEW MORE</button>
    </div>

    <!--IMG 3-->
   
    <div class="carousel-item">
    <a href="#">
      <img src="https://i.blogs.es/30982f/nintendo-switch-sports/1366_2000.jpeg" class=" w-100" alt="...">
    </a>
    <button type="button" class="btn btn-primary">VIEW MORE</button>
    </div>
    
  </div>
 </div>
 </div>
</section>

<!--TRENDING-->
<section>
    <div class="container fluid">
        <div class="row">
         <div class="col-12 TextoTitulos">
         <h2 class = "trending">Trending</h2>
         <p class=Lineas>
         </p>  
         </div>
         <br></br>
         <br></br>
         <br></br>

        <p class=textoComun> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia voluptas doloribus iure, rem veniam
            , quam dignissimos dolores numquam, libero odio commodi eveniet blanditiis illo cumque sit. Provident voluptatem illo suscipit?  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia voluptas doloribus iure, rem veniam
            , quam dignissimos dolores numquam, libero odio commodi eveniet blanditiis illo cumque sit. Provident voluptatem illo suscipit?</p>   </div>
    </div>

    <!--IMG-->

    <div class="album py-5 ">
    <div class="container ">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">
        <div class="col trending_padding_content">
          <div class=" img_aling">
          <img src="https://image.api.playstation.com/vulcan/ap/rnd/202110/2000/phvVT0qZfcRms5qDAk0SI3CM.png" width = "320px" height = "400px"  alt="...">

            <div class="card-body titulo_img_trending">
            <h4>TITLE</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col trending_padding_content">
          <div class="img_aling">
          <img src="https://i.blogs.es/30982f/nintendo-switch-sports/1366_2000.jpeg" width = "320px" height = "400px" alt="...">
            <div class="card-body titulo_img_trending">
              <h4>TITLE</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col trending_padding_content">
          <div class="img_aling">
          <img src="https://media.discordapp.net/attachments/946451251552473189/973058447383871579/unknown.png" width = "320px" height = "400px" alt="...">

            <div class="card-body titulo_img_trending">
            <h4>TITLE</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    <!--IMG-->
</section>
<!--TRENDING-->


<!--NAV BOTTOM-->
<nav class="navbar navbar-light nav_botom_color">
<div class="container-fluid nav_numbers_positions" >
<div class="row ">
      <div class="col-xxl-4 ">
        <div class="nav_bottom_content_column1"><p>2500</p></div>
        
        <p class="nav_bottom_content_p1">GAMES REVIWED</p>

      </div>

      <div class="col-xxl-4 ">
        <div class="nav_bottom_content_column2"><p>+300</p></div>
        
        <P class="nav_bottom_content_p2">ONLINE USERS</P>
      </div>
      <div class="col-xxl-4  ">
        <div class="nav_bottom_content_column3"><p>120</p></div>
        
        <p class="nav_bottom_content_p3">GAMES EVALUATED</p>
      </div>

      <div class="col-xl-4">
        <div class="nav_bottom_content_column4"> <p>30</p> </div>
       
        <p class="nav_bottom_content_p4">GAMES AWARDS</p>
      </div>

    </div>
</div>
</nav>
<!--NAV BOTTOM-->





<?php get_footer(); ?>