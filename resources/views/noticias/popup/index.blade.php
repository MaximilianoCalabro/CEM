@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Noticias - <a href="/noticias/popup/create"><button class="btn btn-success">Nuevo</button></a></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Título</th>
					<th>Sub-título</th>
					<th>Noticia</th>
					<th>Imágenes Slider</th>
				</thead>
               @foreach ($popup as $cat)
				<tr>
					<td>{{ $cat->titulo }}</td>
					<td>{{ $cat->subtitulo }}</td>
					<td>{{ $cat->noticia }}</td>
					@foreach ($popup as $slider)
					<td><img src="{{asset('img/'.$slider->imagen_slider)}}" height="150px" width="150px"></td>
					@endforeach
					<td>
						<a href="{{URL::action('PopupController@edit',$cat->id_popup)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$cat->id_popup}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include ('noticias.popup.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection