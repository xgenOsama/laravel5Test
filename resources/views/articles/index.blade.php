@extends('app')

@section('content')
    <h1>Articles:</h1>
    <hr />
    @foreach($articles as $article)
        <article style="border: dotted red 1px;padding: 20px;">
            {{--<a style="text-decoration: none;" href="/articles/{{$article->id}}"><h3>{{$article->title}}</h3></a>--}}
            {{--<a style="text-decoration: none;color: #0088CC" href="{{action('ArticlesController@show',[$article->id])}}"><h1>{{$article->title}}</h1></a>--}}
            <a style="text-decoration: none;color: #0088CC" href="{{url('/articles',$article->id)}}"><h1>{{$article->title}}</h1></a>
            <p>{{$article->content}}</p>
            <footer style="color: #666666">{{$article->created_at->diffForHumans()}}</footer>
        </article>
    @endforeach
