@extends('layouts.app')

@section('titulo')
    Página Principal
@endsection

@section('contenido')

    <x-listar-post :posts="$posts" />

    {{-- Otra forma
        @forelse ($posts as $post)
        <p>{{ $post->titulo }}</p>
    @empty
        <p>No hay posts</p> 
    @endforelse --}}

@endsection