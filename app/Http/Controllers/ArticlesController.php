<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;
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

            // validation .....
        //    $this->validate($request ,['title' => 'required','content' =>'required']);
        $rules = ['title'=>'required|min:3','content' => 'required'];
     $validator =   Validator::make(Input::all(),$rules);
        if($validator->passes()){
        Article::create(Input::all());
         //Article::create(Request::all());
        return redirect('articles');
        }
        return redirect('articles/create')->withErrors($validator);
        /*        $input = Input::all();*/
        /* $input['published_at'] = Carbon::now();*/
        /*        Article::create($input);*/
    }

    public  function  edit($id){
        $article = Article::findOrFail($id );
         return view('articles.edit')->with('article',$article);
    }

    public  function  update($id){
        $article = Article::findOrFail($id);
        $article->title = Input::get('title');
        $article->content = Input::get('content');
        $article->published_at = Input::get('published_at');
        $article->save();
        return redirect("articles"."\\$id");
    }
    /*  public function store(Requests\CreateArticleRequest $request){

        // validation .....

        Article::create($request->all());
        //Article::create(Request::all());
        return redirect('articles');

              $input = Input::all();*/
        /* $input['published_at'] = Carbon::now();*/
        /*        Article::create($input);
    }*/

}
