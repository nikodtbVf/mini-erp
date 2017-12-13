@extends('layout.principal')
@section('content')
	{!!Form::open(['route'=>'cotizador.store','method'=>'POST'])!!}
			<div class="form-group col-sm-4">
			  {!! Form::Label('medida', 'Medida:') !!}
			  <select class="form-control" name="medida_id">
			    @foreach($medidas as $medida)
			      <option value="{{$medida->id}}">{{$medida->medida}}</option>
			    @endforeach
			  </select>
			</div>
			<div class="form-group col-sm-4">
			  {!! Form::Label('barreno', 'Barreno:') !!}
			  <select class="form-control" name="barreno_id">
			    @foreach($items as $item)
			      <option value="{{$item->id}}">{{$item->tipo}}</option>
			    @endforeach
			  </select>
			</div>	
			 <div class="col-sm-12">
			 	<div class="col-sm-6">
			 		{!!Form::submit('Cotizar',['class'=>'btn btn-primary'])!!}
			 	</div>
			</div>				
	{!!Form::close()!!}
@stop