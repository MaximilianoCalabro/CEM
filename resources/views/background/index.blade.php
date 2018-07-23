@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Fondo y Texto - <!-- <a href="/background/create"><button class="btn btn-success">Nuevo</button></a> --></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Texto Header</th>
					<th>Imágen</th>
				</thead>
               	@foreach ($background as $cat)
				<tr>
					<td>{{ $cat->texto }}</td>
					<td><img src="{{asset('img/'.$cat->imagen)}}" height="150px" width="150px"> </td>
					<td>
						<a href="{{URL::action('BackgroundController@edit',$cat->id_background)}}"><button class="btn btn-info">Editar</button></a>
                        <!-- <a href="" data-target="#modal-delete-{{$cat->id_background}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> -->
					</td>
				</tr>
				@include ('background.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection