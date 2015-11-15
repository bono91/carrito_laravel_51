@extends('base')

@section('content')

<div class="container">
	<br>
	<br>
   <div class="row">
         <div class="col-md-offset-1 hero col-lg-7">
           <div class="col-sm-9">
            <form class="cmxform" id="Form_contact" method="get" action="">
                <fieldset>
                <p>
                  <label for="name">Nombre</label>
                  <input id="name" name="name" minlength="2" type="text" class="form-control"required>
                </p>
                <p>
                  <label for="cemail">E-Mail (requerido)</label>
                  <input id="cemail" type="email" name="email" class="form-control" required class="{required:true,email:true, maxlength:150}">
                </p>
                <p>
                  <label for="phone">Telefono</label>
                  <input id="phone" type="tel" name="phone" class="form-control" required minlength="10" maxlength="10">
                </p>
                <p>
                  <label for="ccomment">Comentario(requerido)</label>
                  <textarea id="ccomment" name="comment" required class="form-control"></textarea>
                </p>
                <p class="text-right">
                  <input  type="submit" value="Enviar" class="btn btn-primary btn_enviar">
                </p>
                </fieldset>
            </form>
            </div>  

        </div>

            <div class="col-md-4">
                <h4>Detalles de Contacto</h4>
                <p><i class="glyphicon glyphicon-map-marker"></i>
                    IGUALDAD NO. 103 ZONA CENTRO TANTOYUCA VERACRUZ C.P. 92120<br>
                </p>
                <p><i class="glyphicon glyphicon-phone"></i> 
                    <abbr title="Phone">Tel</abbr>: (789)8930123 </p>
                <p><i class="glyphicon glyphicon-envelope"></i> 
                    <abbr title="Email">Correo</abbr>: <a href="mailto:cmp@centralmueblerapacheco.com"> cmp@centralmueblerapacheco.com</a>
                </p>
                <p><i class="glyphicon glyphicon-clock"></i> 
                    <abbr title="Hours">Horario</abbr>: Lunes - Domingo: 8:00 AM a 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-face"></i></a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
                
            </div>
        </div> 

   
</div>



@stop