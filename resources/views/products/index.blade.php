@extends('layout')

@section('content')
	<div class="col-xs-12 col-sm-8">
	<h2>Lista de Productos</h2>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th width="20px">ID</th>
				<th>Nombre del producto</th>
				<th colspan="3">&nbsp;</th>

			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
				<td>{{ $product->id }}</td>
				<td>
					<strong>{{ $product->name}}</strong>
					{{ $product->short}}
				</td>
				<td width="20px">Ver</td>
				<td width="20px">Editar</td>
				
				<td width="20px">

						{!! Form::open(['route' => ['products.destroy',$product->id], 'method'=> 'DELETE']) !!}
						    <button class="btn btn-link">
						    	Borrar
						    </button>
						{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
		</table>
		{!! $products->render() !!}
	</div>
	<div class="col-xs-12 col-sm-4 ">
		<p class="alert alert-info">
			Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).
		</p>
		
	</div>

@endsection