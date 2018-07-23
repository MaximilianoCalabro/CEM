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

            {!!Form::model($background,['method'=>'PATCH','route'=>['update',$background->id_background],'files'=>'true'])!!}
            {{Form::token()}}
            <div class="form-group">
                  <label for="texto">Texto Header</label>
                  <input type="text" name="texto" class="form-control" value="{{$background->texto}}" placeholder="Texto">
            </div>
            <div class="form-group">
                  <label for="imagen">Imágen de Fondo</label>
                  <input type="file" name="imagen" class="form-control" value="{{$background->imagen}}">
                  @if (($background->imagen)!='')
                        <img src="{{asset('img/'.$background->imagen)}}" height="150px" width="150px">
                  @endif
            </div>
            <div class="form-group">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}           
            
            </div>
      </div>
@endsection