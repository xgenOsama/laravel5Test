@extends('app')


@section('content')
    <h1>{{$article->title}}</h1>


    <p>{{$article->content}}</p>
    <p>{{$article->published_at}}</p>

@stop