@extends('app')


@section('content')
    <h1>Write a new article:</h1>
    <hr/>
    {!! Form::open(['url' => 'articles']) !!}
    <div class="form-group">
    {!! Form::label('title','Title:')!!}
    {!! Form::text('title','',array('class'=>'form-control'))!!}
    </div>
    <div class="form-group">
        {!! Form::label('content','Body:') !!}
        {!! Form::textarea('content','',array('class'=>'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('published_at','Published_on:')!!}
        {!! Form::input('date','published_at',date('Y-m-d'),array('class'=>'form-control'))!!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add Article',['class' => 'btn btn-primary form-control']) !!}
    </DIV>
    {!! Form::close() !!}

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    @STOP