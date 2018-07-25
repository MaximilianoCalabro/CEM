@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Noticias - <a href="/noticias/inicio/create"><button class="btn btn-success">Nuevo</button></a></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Título</th>
					<th>Subtítulo</th>
					<th>Fecha</th>
					<th>Imágen</th>
					<th>Noticia</th>
				</thead>
               @foreach ($noticias as $cat)
				<tr>
					<td>{{ $cat->titulo }}</td>
					<td>{{ $cat->subtitulo }}</td>
					<td>{{ $cat->fecha }}</td>
					<td><img src="{{asset('img/'.$cat->imagen)}}" height="150px" width="150px"></td>
					<td>{{ $cat->noticia }}</td>
					<td>
						<a href="{{URL::action('NoticiasController@edit',$cat->id_noticias)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$cat->id_noticias}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				<tr>
					@foreach ($slider as $s)
						@if($s->id_noticias == $cat->id_noticias)
						<td>
							<img src="{{asset('img/slider/'.$s->imagen)}}" height="150px" width="150px">
						</td>
						@endif
					@endforeach
				</tr>
				@include ('noticias.inicio.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection