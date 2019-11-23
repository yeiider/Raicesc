@include('thema.head')
<div class="container">
	

 <form action="" method="post" autocomplete="off"  enctype="multipart/form-data">
                        <h1>Crear Un Banner</h1> 
                          <a class="btn btn-primary" style="float: right;" onclick="bootbox.confirm('Esta seguro que desea eliminar este Banner?. Tenga en cuenta que se perdera toda la informacion relacionada con <strong>{{$banner->titulo}}</strong>', function(result) {
                  if(result) {
                    window.location.href = '{{url("Banner/drop/{$banner->id}")}}';
                  }}) "  style="opacity: 0,2; background: transparent;">
                  <i class="fa fa-trash-alt"></i>
                </a>
                        <div class="form-group">
                          
                          <label for="">Titulo del Banner</label>

                          <div class="row">
                            
                             {{ csrf_field() }}
                          <div class="col-7">
                            <input type="text" name="titulo" class="form-control" id="titulo" value="{{$banner->titulo}}" required="" >
                            </div>   
                            <div class="col-4">
                              <input type="color" name="color" class="form-control" value="{{$banner->descripcion}}" id="descripcion">
                            </div>
                        
                           </div>
                           <label for="">Sub Titulo</label>
                          <div class="col-12">
                            <input type="text" name="subtitulo" class="form-control" value="{{$banner->subtitulo}}" id="subtitulo" required="" >
                          </div>   
                           <label for="">Link</label>
                          <div class="col-12">
                            <input type="text" name="link" class="form-control" value="{{$banner->link}}" id="link" required="" >
                          </div> 
                           <label for="">Imagen</label>
                          <div class="col-12">
                            <input type="file" name="{{$banner->imagen}}"  value="{{$banner->imagen}}" class="form-control" id="" required="" >
                          </div>                 
                          
                        </div>
                        <div class="form-group">
                      <input type="submit" name="enviar" value="Guardar"  class="form-control col-4 btn btn-warning">
                    </div>
                      </form>

                  
                    </div>
                  </div>
                  </div>

@include('thema.foot')