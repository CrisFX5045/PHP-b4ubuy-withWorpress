<?php get_header(); ?>
<div class="contanier">
  <div class="row">
    <div class="col-12 px-lg-5">
<h2 class=titulosReview>Reviews</h2>
    </div>
  </div>
</div>

<p class=LineasReview></p>  

<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col-10 text-center mt-4 mb-5">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu libero pharetra, 
    laoreet mi sed, molestie lectus. Suspendisse dignissim est nec venenatis egestas. 
    Nam et eros id leo finibus tincidunt. Vestibulum eget tellus ornare, mattis nibh id,
    luctus velit. Vivamus lacinia orci ut consequat efficitur. Nulla vehicula egestas libero, 
    vel ullamcorper tellus dignissim ullamcorper. Etiam et eleifend orci, a porttitor ex.
    </div>
    <div class="col"> 
    </div>
  </div>
  </div>

<!-- Columnas IMG-->
<div class="container ml-3 mr-3 " id="myBtnContainer"> <!-- contenedor de btn-->
<div class="row  text-center">

  <div class="col-1">
  </div>

  <div class="col-2 ">
  <div>
    <button class="btn_review active" onclick="filterSelection('ACTION')">ACTION </button> <!--Muestra como activo la categoria-->
  </div>
  
    <div class="img_AjustarReview "> 
    <img src="https://cdn.discordapp.com/attachments/943543251703574558/978132000001105920/unknown.png" alt="...">
      </div> 
    </div>

    <div class="col-2">
    <div>
    <button class="btn_review" onclick="filterSelection('STRATEGY')">STRATEGY </button> <!-- detecta el click por nombre-->
  </div>

  <div class="img_AjustarReview">
    <img src="https://cdn.discordapp.com/attachments/943543251703574558/978134025602482176/Nuevo_proyecto.png" alt="...">
      </div>
    </div>

    <div class="col-2">
    <div> 
    <button class="btn_review" onclick="filterSelection('SPORTS')">SPORTS </button> <!-- detecta el click por nombre-->
  </div>

    <div class="img_AjustarReview">
    <img src="https://cdn.discordapp.com/attachments/943543251703574558/978134654538375219/Nuevo_proyecto_1.png" alt="...">
      </div>
    </div>

    <div class="col-2">
    <div>
    <button class="btn_review" onclick="filterSelection('HORROR')">HORROR </button> <!-- detecta el click por nombre-->
  </div>

    <div class="img_AjustarReview">
    <img src="https://cdn.discordapp.com/attachments/943543251703574558/978135925093728296/unknown.png" alt="...">
      </div>
    </div>

    <div class="col-2">
    <div> 
    <button class="btn_review" onclick="filterSelection('ADVENTURE')">ADVENTURE </button> <!-- detecta el click por nombre-->
  </div>

    <div class="img_AjustarReview">
    <img src="https://cdn.discordapp.com/attachments/943543251703574558/978135367272235018/Nuevo_proyecto_2.png" alt="...">
      </div>
      </div>

    </div>
  </div >
  <!-- Columnas IMG-->

  <!-- REVIEWS GRID -->


  <div class="row rowGrid">
  <div class="column ACTION">
    <div class="content img_AjustarContent">
    <div class="flip-card">
  <div class="flip-card-inner">

    <div class="flip-card-front">
      <img src="https://cdn.discordapp.com/attachments/943543251703574558/978502951536570399/action_Mesa_de_trabajo_1.png" alt="Avatar" style="width:380px;height:400px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>

      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <button class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">Read more</button>
    </div>
    
     </div>
     
    </div>
    </div>
  </div>

  <div class="column STRATEGY">
    <div class="content img_AjustarContent">

    <div class="flip-card">
  <div class="flip-card-inner">

    <div class="flip-card-front">
      <img src="https://cdn.discordapp.com/attachments/943543251703574558/978134025602482176/Nuevo_proyecto.png" alt="Avatar" style="width:380px;height:400px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
      <button class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">Read more</button>
    </div>
    
     </div>
     
    </div>
      
    </div>
  </div>

  <div class="column SPORTS">
    <div class="content img_AjustarContent">
    <div class="flip-card">
  <div class="flip-card-inner">

    <div class="flip-card-front">
      <img src="https://cdn.discordapp.com/attachments/943543251703574558/978509036846739496/sports_Mesa_de_trabajo_1.png" alt="Avatar" style="width:380px;height:400px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
      <button class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">Read more</button>
    </div>
    
     </div>
     
    </div>
    </div>
  </div>

  <div class="column HORROR">
    <div class="content img_AjustarContent">
    <div class="flip-card">
  <div class="flip-card-inner">

    <div class="flip-card-front">
      <img src="https://cdn.discordapp.com/attachments/943543251703574558/978509453429190656/horror_Mesa_de_trabajo_1.png" alt="Avatar" style="width:380px;height:400px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
      <button class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">Read more</button>
    </div>
    
     </div>
    </div>
    </div>
  </div>

  
  <div class="column ADVENTURE">
    <div class="content img_AjustarContent">
    <div class="flip-card">
  <div class="flip-card-inner">

    <div class="flip-card-front">
      <img src="https://media.discordapp.net/attachments/943543251703574558/978509798792368128/Adventure_Mesa_de_trabajo_1.png?width=671&height=671" alt="Avatar" style="width:380px;height:400px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
      <button class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">Read more</button>
    </div>
    
     </div>
     
    </div>
     
    </div>
  </div>
<!-- END GRID -->
</div>

<!--FILTRADO-->

<script>

filterSelection("ACTION") // Execute the function and show all columns
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "ACTION") c = "ACTION";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show"); 
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

<!--FILTRADO-->




<?php get_footer(); ?>
