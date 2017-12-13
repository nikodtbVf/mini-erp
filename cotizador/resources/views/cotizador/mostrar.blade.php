@extends('layout.principal')
@section('content')
	</button>
		<button class="btn btn-primary" type="button">
	     El total de tu cotización es de: <span class="badge">{{$costo_final}}</span>
	</button>	
	<button class="btn btn-primary"> Enviar Cotización </button>		
	{!!Form::close()!!}
@stop