<div id="slider" class="carousel slide" data-ride="carousel">
  <!-- Indicadores -->
  <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper para slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src={{ asset('img/') }}>
      <div class="carousel-caption">
        .........
      </div>
    </div>
    <div class="item">
      <img src="http://www.mabe.com.mx/contenido//BannerHome/banners-web-Felicitacion_1.jpg" alt="...">
      <div class="carousel-caption">
        ........
      </div>
    </div>
    <div class="item">
      <img src="http://www.mabe.com.mx/contenido//BannerHome/Banner_cabecera3.jpg" alt="...">
      <div class="carousel-caption">
        .........
      </div>
    </div>
   
  </div>

  <!-- Controladores -->
  <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#slider" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

