@extends('layout')

@section('content')

    @foreach($perguntas as $pergunta)
        {{$pergunta->nome}}:
        <br>{{$pergunta->pergunta}}
        <a href="{{route('delete.pergunta',['id'=>$pergunta->id])}}" style="color: red">X</a>
        <br>{{$pergunta->resposta}}
        <form action="{{ route('update.pergunta',['id'=>$pergunta->id]) }}">
            <input type="text" name="resposta" value="{{$pergunta->resposta}}">
            <a href=""><button>Responder</button></a>
        </form>
        <br><br>
    @endforeach

@stop