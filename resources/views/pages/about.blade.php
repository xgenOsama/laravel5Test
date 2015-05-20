@extends('app')


@section('content')


@if(count($people))

    <h3>people i like</h3>

    <ul>

    @foreach($people as $preson)
    <li>{{$preson}}</li>
    @endforeach

    </ul>
@endif
<p>
ay kalam fe el hamada
</p>
@stop

