
@include('thema.head2')


<nav class="navbar navbar-expand-lg navbar-dark fixed-top " id="mainNav" @if($datos['bg_nav']=='default')

style="background-color: #000000"
@else
style="background-color: {{$datos['bg_nav']}}"
@endif" >
<audio src="http://pontenlinea.com:8000/emisora" autoplay=""  id="audio"></audio>
<a class="navbar-brand js-scroll-trigger ml-5" href="#page-top" @if($datos['color']!='default') style="color: {{$datos['color']}}" @endif>{{$datos['titulo']}}</a>
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

 <i class="fa fa-bars"></i>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
  <ul class="navbar-nav text-uppercase ml-auto">
    <li class="nav-item">
      <a class="nav-link js-scroll-trigger" href="#services">Planes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link js-scroll-trigger" href="#portfolio">Portafolios</a>
    </li>
    <li class="nav-item">
      <a class="nav-link js-scroll-trigger" href="#about">Acerca de</a>
    </li>
    <li class="nav-item">
      <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
    </li>
    <li class="nav-item">
      <a class="nav-link js-scroll-trigger" href="{{route('pqrsf')}}">PQRSF</a>
    </li>
     <li class="nav-item">
      <a class="nav-link js-scroll-trigger" target="_blank" href="/garantia.pdf">Garantia de Servicio</a>
    </li>
     <li class="nav-item">
      <a class="nav-link js-scroll-trigger" href="http://clientes.raicesc.net/saldo/global-raices-tv/" target="_blank"><span class="fa-stack fa-2x>
      <i class="fas fa-circle fa-stack-2x text-primary"></i>
      <i class="fas fa-credit-card fa-stack-1x fa-inverse"></i>
      </span>Pago en Linea</a>
    </li>
    @if(isset(auth()->user()->email))<li class="nav-item"><a href="{{route('salir')}}" class="nav-link js-scroll-trigger">Salir</a></li>@endif
  </ul>
</div>
</div>
</nav>

<!-- Header -->
<header class="masthead">
    <!-- <div class="container">
      <div class="intro-text">
        <div class="intro-heading text-uppercase" style="color: #000000">Raices</div>
        <div class="intro-lead-in" style="color: #000000">Comunicaciones</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Conoce mas</a>
      </div>
    </div> -->

    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <?php $i=1; ?>
          @forelse($datos['banner'] as $y)

          <li data-target="#carouselExampleCaptions" data-slide-to="$i"></li>

          @empty
          @endforelse
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/2.jpg" class="d-block w-100" alt="..." style="width: 1600px; height: 800px">
            <div class="carousel-caption d-none d-md-block">
             <div class="intro-heading text-uppercase" style="color: #000000; font-size: 100px"></div>
             <div class="intro-lead-in js-scroll-trigger" style="color: #000000; font-size: 75px"></div>
           
           </div>
         </div>
         @forelse($datos['banner'] as $b)
         <div class="carousel-item ">
          <img src="{{asset("assets/img/banner/{$b->imagen}")}}" class="d-block w-100" alt="..." style="width: 1600px; height: 800px">
          <div class="carousel-caption d-none d-md-block">
           <div class="intro-heading text-uppercase" style="color: @if($b->descripcion!='default') {{$b->descripcion}} @else black @endif; font-size: 100px">{{$b->titulo}}</div>
           <div class="intro-lead-in js-scroll-trigger" style="color: @if($b->descripcion!='default') {{$b->descripcion}}  @else black @endif; font-size: 75px">{{$b->subtitulo}}</div>
           <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="{{$b->link}}">Conoce mas</a>
         </div>
       </div>
       @empty
       @endforelse

     </div>
     <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</header>

<!-- Services -->
<style>
 @if($datos['primario']!='default')
 .text-primary{
  color: {{$datos['primario']}} !important;
}
@else 
.text-primary{
  color: #fed136 !important;
}

@endif
</style>
<section class="page-section" id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Planes</h2>
        <h3 class="section-subheading text-muted">Planes de la mejor calidad y velocidad</h3>
        
      </div>
    </div>
    <div class="row text-center">

     <!-- aqui va el plan de megas puede ser una lista dinamica que contenga la informacion    -->
     <div class="container">
       <ul class="nav justify-content-center nav-tabs">
            <li class="nav-item ml-10">
              <button class="nav-link active btn" id="2m"><h1 class="text-primary"> 2 MG</h1></button>
              
            </li>
            <li class="nav-item ml-10">
              <button class="nav-link btn" id="4m"><h1 class="text-primary"> 4 MG</h1></button>
            </li>
            <li class="nav-item ml-10">
              <button class="nav-link btn" id="5m" ><h1 class="text-primary"> 5 MG</h1></button>
            </li>
             <li class="nav-item ml-10">
              <button class="nav-link btn" id="10m"><h1 class="text-primary">10 MG</h1></button>
            </li>
           
       </ul>
       <div class="p"></div>
       <div class="plan" id="2">
        <div class="row">
          <div class="col">
            <h1 class="" style="font-size: 80px; text-align: left; color: #12AE28">2 MG</h1>
         <div class="text-justify" style="text-align: left; font-family: sans-serif;">Servicio de Datos Ideal para el Hogar<br>
        Correo electrónico<br>
        Navega en redes sociales<br>
        
        Vídeos en SD<br>
        Consultas en Google<br>
        Descarga una película de 4Gb en 12Hrs <br>
        (Aproximadamente, dependiendo del  <br>servidor de descarga)
        </div>
          </div>
          <div class="col mt-3 icono">
            
              <span class="fa-stack fa-10x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-broadcast-tower fa-stack-1x fa-inverse"></i>
           
          </span>
          </div>
         
        </div>
         
       </div>
       <div class="plan none" id="4" >
        <div class="row">
          <div class="col">
            
         <h1 class="" style="font-size: 80px; text-align: left; color: #12AE28">4 MG</h1>
         <div class="text-justify" style="text-align: left; font-family: sans-serif;">Servicio de Datos <br>
        Correo electrónico<br>
        Navega en redes sociales<br>
        Videoconferencia<br>
    
        Vídeos en SD<br>
        Consultas en Google<br>
        Descarga una película de 4Gb en 7Hrs <br>
        (Aproximadamente, dependiendo del  <br>servidor de descarga)
        </div>
        </div>
        <div class="col mt-3 icono">
            
              <span class="fa-stack fa-10x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-braille fa-stack-1x fa-inverse"></i>
        
          </span>
          </div>
          </div>
        </div>

         <div class="plan none" id="5" >
          <div class="row">
            <div class="col">
              
         <h1 class="" style="font-size: 80px; text-align: left; color: #12AE28">5 MG</h1>
         <div class="text-justify" style="text-align: left; font-family: sans-serif;">Servicio de Datos <br>
      
        Correo electrónico<br>
        Navega en redes sociales<br>
        
        Vídeos en HD<br>
        Consultas en Google<br>
        Netflix (Dependiendo de la calidad del video)<br>
        Descarga una película de 4Gb en 4Hrs <br>
        (Aproximadamente, dependiendo del  <br>servidor de descarga)

        </div>
            </div>
            <div class="col mt-3 icono">
            
              <span class="fa-stack fa-10x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fab fa-battle-net fa-stack-1x fa-inverse"></i>
       
          </span>
          </div>
          </div>
        </div>

        <div class="plan none" id="10" >
          <div class="row">
            <div class="col">
              
         <h1 class="" style="font-size: 80px; text-align: left; color: #12AE28">10 MG</h1>
         <div class="text-justify" style="text-align: left; font-family: sans-serif;">Servicio de Datos Ideal para el Hogar y PYMES<br>       
          Correo electrónico<br>
          Navega en redes sociales<br>
         
          Vídeos en HD<br>
          Consultas en Google<br>
          Netflix<br>
          Descarga una película de 4Gb en 2Hrs <br>
          (Aproximadamente, dependiendo del  <br>servidor de descarga)


        </div>
            </div>
            <div class="col mt-3 icono">
            
              <span class="fa-stack fa-10x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-bolt fa-stack-1x fa-inverse"></i>
       
          </span>
          </div>
          </div>
        </div>
       </div>
     </div>
        
  </div>
</div>
</section>

<!-- Portfolio Grid -->
<section class="bg-light page-section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Portafolio</h2>
        <h3 class="section-subheading text-muted">Productos</h3>
      </div>
    </div>
    @if(isset(auth()->user()->email)) <a href="javascript:finestraSecundaria('{{route("add.portafolio")}}')" class="btn btn-primary service-heading mb-3"><i class="fas fa-plus "></i>Crear</a> @endif
    <div class="row">
      @forelse($datos['portafolio'] as $p)

      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#{{$p->identificador}}">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="{{asset("assets/img/portfolio/{$p->imagen}")}}" style="width: 400px; height: 300px">
        </a>
        <div class="portfolio-caption">
          <h4>{{$p->titulo}}</h4>
          <p class="text-muted">{{$p->subtitulo}}</p>
          @if(isset(auth()->user()->email))  <a style=""  class="btn btn-primary" href="javascript:finestraSecundaria('{{url("Portafolio/{$p->id}")}}')" ><i class="fa fa-edit"></i></a>
<a class="btn btn-primary" onclick="bootbox.confirm('Esta seguro que desea eliminar este Portafolio?. Tenga en cuenta que se perdera toda la informacion relacionada con <strong>{{$p->titulo}}</strong>', function(result) {
  if(result) {
    window.location.href = '{{url("PortafolioDrop/{$p->id}")}}';
  }}) "  style="opacity: 0,2; background: transparent;">
  <i class="fa fa-trash-alt"></i>
</a> @endif

</div>
</div>
@empty

@endforelse

</div>
</div>
</section>

<!-- About -->
<section class="page-section" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Acerca de Raices Comunicaciones</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
       @if(isset(auth()->user()->email)) <a href="javascript:finestraSecundaria('{{route("historia")}}')" class="btn btn-primary service-heading mb-3"><i class="fas fa-plus "></i>Crear</a>@endif

       <ul class="timeline">
        @forelse($datos['historia'] as $h)
        <li>
         @if(isset(auth()->user()->email))  <a style=""  class="btn btn-primary" href="javascript:finestraSecundaria('{{url("Historia/update/{$h->id}")}}')" ><i class="fa fa-edit"></i></a>
<a class="btn btn-primary" onclick="bootbox.confirm('Esta seguro que desea eliminar este Historia?. Tenga en cuenta que se perdera toda la informacion relacionada con <strong>{{$h->titulo}}</strong>', function(result) {
  if(result) {
    window.location.href = '{{url("Historia/drop/{$h->id}")}}';
  }}) "  style="opacity: 0,2; background: transparent;">
  <i class="fa fa-trash-alt"></i>
</a>@endif
<div class="timeline-image">
  <img src="{{asset("assets/img/about/{$h->imagen}")}}" class="rounded-circle img-fluid" alt="logo" width="200" height="200" >

</h3>
</div>
<div class="timeline-panel">
  <div class="timeline-heading">

    <h4 class="subheading">{{$h->titulo}}</h4>
  </div>
  <div class="timeline-body">
    <p class="text-muted"><?=$h->contedino?></p>
  </div>
</div>
</li>
@empty

@endforelse

</ul>
</div>
</div>
</div>
</section>
<ul class="radio">
 @if(isset(auth()->user()->email)) <li><a class="btn -btn-primary portfolio-link"  data-toggle="modal" href="#config">
   <span class="fa-stack fa-2x">
    <i class="fas fa-circle fa-stack-2x text-primary"></i>
    <i class="fas fa-cogs fa-stack-1x fa-inverse"></i>
  </span> @endif
</a></li>
 <li><a class="btn -btn-primary portfolio-link"  href="http://clientes.raicesc.net/saldo/global-raices-tv/" target="_blank">
   <span class="fa-stack fa-2x">
    <i class="fas fa-circle fa-stack-2x text-primary"></i>
    <i class="fas fa-credit-card fa-stack-1x fa-inverse"></i>
  </span> 
</a></li>
<li><button class="btn"><img src="assets/img/radio.png" class="navbar-toggler-right img" alt=""></button></li>
<li><button class="btn "><img src="assets/img/play.png" id="im" class="img 1" alt=""></button></li>

</ul>

<!-- Team -->
<section class="bg-light page-section" id="team">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Noticias</h2>
        <h3 class="section-subheading text-muted">Siguenos para que te mantengas informado</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <div class="team-member">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FRa%25C3%25ADces-Comunicaciones-102765404461352%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>
      </div>
        <div class="col-8">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.9613508653351!2d-76.39275277077132!3d3.13551223895446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3a7980e65a7049%3A0x99ce9950af59f881!2sGlobal%20Ra%C3%ADces%20TV!5e0!3m2!1ses!2sco!4v1572280698580!5m2!1ses!2sco" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>

      <div class="row">

      </div>
    </div>
  </section>

  <!-- Clients -->
  <section class="py-5 " style="background-color: #fed136;">
    <div class="container" >
      <div class="row">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-3 col-sm-6">
          <a href="https://www.enticconfio.gov.co/" target="_blank">
            <img class="img-fluid d-block mx-auto" src="assets/img/logos/tic.png" alt="" style="width: 200px;">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="https://www.crcom.gov.co/es/pagina/regimen-proteccion-usuario" target="_blank">
            <img class="img-fluid d-block mx-auto" src="assets/img/logos/derechos.jpg" alt="" style="width: 350px; height: 200px">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="https://teprotejo.org/" target="_blank">
            <img class="img-fluid d-block mx-auto" src="assets/img/logos/pornografia-infantil.png" alt="" style="width: 200px;">
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contactanos </h2>
          <h3 class="section-subheading text-muted">Deja tu mensaje con tu información de contacto.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form   method="post" action="">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" name="nombre" placeholder="Tu Nombre *" required="required" data-validation-required-message="Por favor ingrese su nombre">
                  <p class="help-block text-danger"></p>
                </div>
                
                <div class="form-group">
                  <input class="form-control" id="email" type="email" name="email" placeholder="Tu Email *" required="required" data-validation-required-message="Por favor ingrese su Email.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Tu Phone *" name="telefono" required="required" data-validation-required-message="Por favor ingrese su numero de telefono">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Tu Message *" required="required" name="contenido" data-validation-required-message="Por favor ingrese su mensaje"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <input  class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensaje</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>



  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/Ra%C3%ADces-Comunicaciones-102765404461352/?modal=admin_todo_tour" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  @forelse($datos['portafolio'] as $p)
  <div class="portfolio-modal modal fade" id="{{$p->identificador}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">{{$p->titulo2}}</h2>
                <p class="item-intro text-muted">{{$p->subtitulo2}}</p>
                <img class="img-fluid d-block mx-auto"  alt="" src="{{asset("assets/img/portfolio/{$p->imagen2}")}}">
                <div class=""><?= $p->cuerpo?></div>

                <button class="btn btn-primary mt-5" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                Cerrar Proyecto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @empty
  @endforelse
  <div class="portfolio-modal modal fade" id="config" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h1 class="text-uppercase">Configuracion de Pagina</h1>
                <div class="space"> <hr></div>
                <div class="row">
                  <div class="col-6">
                   <form action="{{route('config')}}" autocomplete="off" class="mt-3" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                     <label for="" class="label-control">Cambiar titulo de la pagina</label>
                     <input type="text" class="form-control" value="{{$datos['titulo']}}" name="titulo" id="titulo">
                   </div>
                   <div class="form-group">
                     <label for="color_titulo" class="control-label">Color del Titulo</label>
                     <input type="color" name="color_titulo" class="form-control" id="color_titulo" value="{{$datos['color']}}">
                   </div>

                   <div class="form-group">
                     <label for="color_nav" class="control-label">Color del fondo Nav</label>
                     <input type="color" name="bg_nav" class="form-control" id="color_nav" value="{{$datos['bg_nav']}}">
                   </div>
                   <div class="form-group">
                     <label for="primario" class="control-label">Color Primario</label>
                     <input type="color" name="primario" class="form-control" id="primario" value="{{$datos['primario']}}">
                   </div>
                   <div class="form-group">
                    <input type="submit" name="enviar" value="Guardar" class="form-control col-4 btn btn-success">
                  </div>
                </form>
              </div>
              <div class="col-5">
                <form action="{{route('create.banner')}}" method="post" autocomplete="off"  enctype="multipart/form-data">
                  <h1>Crear Un Banner</h1>
                  <div class="form-group">

                    <label for="">Titulo del Banner</label>
                    <div class="row">

                     {{ csrf_field() }}
                     <div class="col-7">
                      <input type="text" name="titulo" class="form-control" id="titulo" required="" >
                    </div>   
                    <div class="col-4">
                      <input type="color" name="color" class="form-control" value="default" id="descripcion">
                    </div>

                  </div>
                  <label for="">Sub Titulo</label>
                  <div class="col-12">
                    <input type="text" name="subtitulo" class="form-control" id="subtitulo" required="" >
                  </div>   
                  <label for="">Link</label>
                  <div class="col-12">
                    <input type="text" name="link" class="form-control" id="link" required="" >
                  </div> 
                  <label for="">Imagen</label>
                  <div class="col-12">
                    <input type="file" name="imagen" class="form-control" id="imagen" required="" >
                  </div>                 

                </div>
                <div class="form-group">
                  <input type="submit" name="enviar" value="Guardar" class="form-control col-4 btn btn-warning">
                </div>
              </form>
            </div>
          </div>
          <div class="espace"><hr></div>

          <div class="container">
            <h3>Lista de Banners  <small class="bg-info">Haga click en el banner para editarlo</small></h3>
            <div class="row">
              @forelse($datos['banner'] as $b)
              <div class="col-sm-3">
                <div class="row">
                  <div class="col-sm">
                    <a  class="portfolio-link" href="javascript:finestraSecundaria('{{url("Banner/edit/{$b->id}")}}')"><img src="{{asset("assets/img/banner/{$b->imagen}")}}" alt="" style="width: 100%"></a>
                  </div>
                  <div class="col-sm-12">
                    <h5>{{$b->titulo}}</h5>
                  </div>
                </div>
              </div>
              @empty
              @endforelse
            </div>
          </div>
          <div class="espace"><hr></div>
          <h3>Noticias</h3> 
          <button class="btn btn-success mb-3" style="float: left;"><i class="fas fa-plus"></i>Crear</button>


          <button class="btn btn-primary mt-5" data-dismiss="modal" type="button">
            <i class="fas fa-times"></i>
          Cerrar Proyecto</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script language=javascript>
  function finestraSecundaria (url){
    window.open(url, "Editar servicio", "width=500, height=500")
  }
</script>


@include('thema.foot')
</html>
