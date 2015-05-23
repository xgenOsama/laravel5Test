@extends('app')

@section('content')
    <h1>Edit: {!! $article->title !!}</h1>
    <hr/>
    {!! Form::open(['method' => 'PATCH','action'=>['ArticlesController@update',$article->id ]]) !!}
    <div class="form-group">
        {!! Form::label('title','Title:')!!}
        {!! Form::text('title',$article->title,array('class'=>'form-control'))!!}
    </div>
    <div class="form-group">
        {!! Form::label('content','Body:') !!}
        {!! Form::textarea('content',$article->content,array('class'=>'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('published_at','Published_on:')!!}
        {!! Form::input('date','published_at',date('Y-m-d'),array('class'=>'form-control'))!!}
    </div>
    <div class="form-group">
        {!! Form::submit('Edit Article',['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

@stop