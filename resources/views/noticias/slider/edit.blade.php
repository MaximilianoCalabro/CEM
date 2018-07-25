@extends ('layouts.admin')
@section ('contenido')
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                  <ul>
                  @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                  @endforeach
                  </ul>
            </div>
            @endif

            {!!Form::model($noticias,['method'=>'PATCH','route'=>['inicio.update',$noticias->id_noticias],'files'=>'true'])!!}
            {{Form::token()}}
            <div class="form-group">
                  <label for="titulo">Título</label>
                  <input type="text" name="titulo" class="form-control" value="{{$noticias->titulo}}" placeholder="Título">
            </div>
            <div class="form-group">
                  <label for="subtitulo">Subtítulo</label>
                  <input type="text" name="subtitulo" class="form-control" value="{{$noticias->subtitulo}}" placeholder="Subtítulo">
            </div>
            <div class="form-group">
                  <label for="fecha">Fecha</label>
                  <input type="text" name="fecha" class="form-control" value="{{$noticias->fecha}}" placeholder="Fecha">
            </div>
            <div class="form-group">
                  <label for="imagen">Imágen (600 x 600 px)</label>
                  <input type="file" name="imagen" class="form-control" value="{{$noticias->imagen}}">
                  @if (($noticias->imagen)!='')
                        <img src="{{asset('img/'.$noticias->imagen)}}" height="150px" width="150px">
                  @endif
            </div>
            <div class="form-group">
                  <label for="noticia">Noticia</label>
                  <textarea type="text" name="noticia" class="form-control" placeholder="Noticia">{{$noticias->noticia}}</textarea>
            </div>
            <div class="form-group">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}           
            
            </div>
      </div>
@endsection