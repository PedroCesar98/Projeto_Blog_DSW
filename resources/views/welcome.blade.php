@extends('layout')

@section('content')

    <form action="/create">
        <input type="text" name="nome" placeholder="Digite seu Nome">
        <input type="text" name="pergunta" placeholder="Digite sua Pergunta">
        <input type="submit" name="submit" value="Enviar Pergunta">
    </form>
    <br><br>
    @foreach($perguntas as $pergunta)
        {{$pergunta->nome}}:
        <br>{{$pergunta->pergunta}}
        <br>{{$pergunta->resposta}}
        <br><br>
    @endforeach

@stop