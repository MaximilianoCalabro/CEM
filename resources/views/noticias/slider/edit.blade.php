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

            {!!Form::model($slider,['method'=>'PATCH','route'=>['slider.update',$slider->id_slider],'files'=>'true'])!!}
            {{Form::token()}}
            <div class="form-group">
                  <label for="imagen">Imágen (600 x 600 px)</label>
                  <input type="file" name="imagen" class="form-control" value="{{$slider->imagen}}">
                  @if (($slider->imagen)!='')
                        <img src="{{asset('img/'.$slider->imagen)}}" height="150px" width="150px">
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