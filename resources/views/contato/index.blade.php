@extends('layout.site')
@section('titulo','Contatos')

@section('conteudo')

<h3>Essa é a index do ContatoController</h3>

@foreach ($contatos as $contato)
	<p>{{ $contato->nome }}</p>
	<p>{{ $contato->telefone }}</p>
@endforeach

@endsection