@extends('layouts.master')

@section('titulo', 'Inicio')

@section('contenido')

	<h1>Bienvenidos al curso</h1>

	@foreach ($posts as $post)
		<h1>{{ $post->title }}</h1>
		<p>{{ $post->description }}</p>
	@endforeach

@endsection
