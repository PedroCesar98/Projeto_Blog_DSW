@extends('layout')

@section('content')

    <form action="/verificarLogin">
        <input type="text" name="user" placeholder="Usuario">
        <input type="password" name="senha" placeholder="Senha">
        <a href=""><button>Responder</button></a>
    </form>

@stop