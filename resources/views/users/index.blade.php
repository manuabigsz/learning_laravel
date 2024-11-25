@extends('layouts.app')
@section('title', 'Lista de Usuários')

@section('content')
    <h1 class="title"> {{$greeting}}</h1>
    <img width="100" src="{{Vite::asset('resources/images/cachorro_fofo.jpg')}}" alt="">
    @foreach ($users as $user)
    <div class="user-name ">{{$user->name}} ({{$user->email}})</div>
        
  
    @endforeach
   {{$users->links('pagination::bootstrap-4')}}


@endsection
