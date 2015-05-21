<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;
use Input;

class ArticlesController extends Controller {

	public function index(){
        /*$articles = Article::all();*/
      /*  $articles = Article::latest()->get();*/
        /*$articles = Article::orderBy('published_at','DESC')->get();*/
     /*   $articles = Article::latest('published_at')->where('published_at','<=',Carbon::now())->orderBy('published_at','DESC')->get();*/
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index',compact('articles'));
    }
    public function show($id){
        $article = Article::findOrFail($id);
        /*if(is_null($article)){
            abort(404);
        }*/
        return view('articles.show',compact('article'));
    }
    public function create(){
        return view('articles.create');
    }
    public function store(){
/*        $input = Input::all();*/
       /* $input['published_at'] = Carbon::now();*/
        /*        Article::create($input);*/
         Article::create(Request::all());
        return redirect('articles');
    }

}
