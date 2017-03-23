@extends('layout')

@section('content')
	<div class="col-xs-12 col-sm-8">
	<h2>
		Nuevo Producto
		<a href="{{ route('products.index') }}" class="btn btn-default pull-right">
			Regresar
		</a>
	</h2>

		{!! Form::open(['route' => 'products.store']) !!}
			<div class="form-group">
				{!! Form::label('name', 'Nombre del Producto') !!}
				{!! Form::text('name', '',['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('short', 'Descripcion breve del producto') !!}
				{!! Form::text('short', '',['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('body', 'Descripcion completa del producto') !!}
				{!! Form::textarea('body', '',['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Guardar',['class'=> 'btn btn-primary']); !!}
				
			</div>

		{!! Form::close() !!}

	</div>
	<div class="col-xs-12 col-sm-4 ">
		@include('products.partials.aside')
	</div>

@endsection