@extends('layouts.app');
@section('title','Listagem');
@section('content');

<h1> Listagem de usuários 
    <a href="{{route('users.create')}}"> (+) </a> 
</h1>
    <ul>
    @foreach($users as $user)
    <li>
    {{$user->name}}
    <a href="{{ route('users.show', $user->id) }}">- Detalhes</a>
    <a href="{{ route('users.edit', $user->id) }}">- Editar</a>
    </li>
    @endforeach
    </ul>
@endsection