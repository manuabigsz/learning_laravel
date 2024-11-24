@extends('layouts.app')
@section('title', 'Lista de Usuários')

@section('content')
 <h1>Mostrar usuários {{$user->name}}</h1>

    @if($user->id === 1)
    <div>Sou admin</div>
    @else
    <div>Não sou admin</div>
        @endif
    {{dd($user)}}
@endsection
