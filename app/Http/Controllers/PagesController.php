<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class PagesController extends Controller {

    /**
     * @return $this
     */
    public function about()
	{

		$people  = ['osama','ahmed','nourhan','omar'];
		return View('pages.about',compact('people'));
	}



    public  function contact(){
        return View('pages.contact');
    }

   /* public function article(){
        $article = Article::create(['title'=>'nour','content'=>'hello bad world','published_at'=>Carbon::now()]);
        $article = Article::find(2);
        $article->update(['title'=>'zeinab','content'=>'hello bad world','published_at'=>Carbon::now()]);
        $article->save();
    }*/





}