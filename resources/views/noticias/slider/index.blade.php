@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Slider Noticias - <a href="/noticias/slider/create"><button class="btn btn-success">Nuevo</button></a></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Imágen</th>
				</thead>
               @foreach ($slider as $cat)
				<tr>
					<td><img src="{{asset('img/'.$cat->imagen)}}" height="150px" width="150px"></td>
					<td>
						<a href="{{URL::action('SliderController@edit',$cat->id_slider)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$cat->id_slider}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include ('noticias.slider.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection