<?php get_header(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!doctype html>
<html lang="en">
<body> 
</div>
    <div class="container-fluid">
      

        <!-- EVENTO HOME-->
        
        
            <div class="row section-evento" >
            
                
                <div class="col-6">                   
                <a href="#">        
            <div class="evento-main">

            <img class="evento-main-AjustarImage" src="https://cdn.discordapp.com/attachments/943543251703574558/978502951536570399/action_Mesa_de_trabajo_1.png" alt="">

            </div>
                </a>
                              
                    
                </div>
                <hr class="barra-evento">
                <div class="col-6">                   
                        <h1 class="evento-title">Batllefield 4</h1><br>
                        <div class="evento-stars">
                        <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star"></span><br>
                          </div>
                        <h1 class="evento-subtitle">Battlefield 4 is a first-person shooter video game developed by EA Digital Illusions 
                          CE and published by Electronic Arts on October 29, 2013 for Microsoft Windows, Xbox 360 and PlayStation 3.</h1>
                                                
                    </h1>

                    
                </div>
            

        <!-- EVENTO END-->

        <div class="col-12 relacionados"><h2> | Similar Reviews</h2></div>

<div class="col-3">
<a href="">
    <div class="relacionado-1">
      
    <img class="relacionado_AjustarImage" src="https://cdn.discordapp.com/attachments/943543251703574558/983132850738065439/imgIcon.png" alt="">
       
    </div>
    </a>
    <div class="txt-background">
    <p class="relacionado-title">Titulo relacionado #1</p>
    <p class="relacionado-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>

</div>
<div class="col-3">
<a href="">
    <div class="relacionado-2">
        
    <img class="relacionado_AjustarImage" src="https://cdn.discordapp.com/attachments/943543251703574558/983132850738065439/imgIcon.png" alt="">   

    </div>
    </a>
    <div class="txt-background">
    <p class="relacionado-title">Titulo relacionado #2</p>
    <p class="relacionado-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>

</div>
<div class="col-3">
<a href="">
    <div class="relacionado-3">
        
    <img class="relacionado_AjustarImage" src="https://cdn.discordapp.com/attachments/943543251703574558/983132850738065439/imgIcon.png" alt="">  
    
    </div>
    </a>
    <div class="txt-background">
    <p class="relacionado-title">Titulo relacionado #3</p>
    <p class="relacionado-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>

</div>
<div class="col-3">
<a href="">
    <div class="relacionado-4">

    <img class="relacionado_AjustarImage" src="https://cdn.discordapp.com/attachments/943543251703574558/983132850738065439/imgIcon.png" alt="">

    </div>
    </a>
    <div class="txt-background">
    <p class="relacionado-title">Titulo relacionado #4</p>
    <p class="relacionado-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>

</div>




</div><!--AQUI TERMINA EL ROW-->


  
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="pop-up-header">
          
          <h4 class="modal-title">Registro compra</h4>
        </div>
        <div class="modal-body">
          
          <input class="ingresar-texto" type="text" placeholder="Favor ingrese su nombre">
          <input class="ingresar-texto" type="email" placeholder="Favor ingrese su correo electronico">
         
          
        </div>

        <div class="modal-footer">
        <input class="btn-registrarse" data-toggle="modal" data-target="#modal-reserva" data-dismiss="modal" type="submit" value="Registrarse">
          <button type="button" class="btn close" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  

<!--Aqui termina el modal para registrarse-->

<!-- Modal ya registrado -->
<div class="modal fade" id="modal-reserva" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="pop-up-header">
          
          <h4 class="modal-title">Record de asistencia</h4>
        </div>
        <div class="modal-body">
          
          <label class="label-numeros">Numero de adultos</label><input class="ingresar-numeros" type="number" min="0" max="5" placeholder="Max 5"><br>
          <label class="label-numeros">Numero de adultos</label><input disabled class="ingresar-numeros" type="number" min="0" max="5" placeholder="No disponible">
          <p class="modal-text">Existen eventos donde por seguridad y responsabilidad de los organizadores solo pueden asistir personas mayores a los 18 anhos de edad</p>
          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
          <label class="confirmacion" for="vehicle1"> Entiendo y confirmo que soy mayor de 18 anhos</label><br>
        </div>

        <div class="modal-footer">
        <input class="btn-registrarse" type="submit" value="Confirmar">
          <button type="button"  class="btn close" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!--aqui termina el container fluid-->

</body>

</html>
<?php get_footer(); ?>