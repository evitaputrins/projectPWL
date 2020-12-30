<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use PDF;

class ArticleController extends Controller
{
    //public function __construct()
    //{
    //     //$this->middleware('auth');
    //     $this->middleware(function($request, $next){
    //        if(Gate::allows('manage-articles')) return $next($request);
    //        abort(403, 'Anda tidak memiliki cukup hak akses');
    //        });
    //}

    public function index($id){
        $article = Article::find($id);
        return view('Article', ['id'=>$id])->with(compact('article'));
    }
    public function manage(){
        $article = Article::all();
        return view('Manage',['article' => $article]);
    }
    public function add(){
        return view('addarticle');
    }
    public function create(Request $request){
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }
        Article::create([
        'id' => $request->id,
        'title' => $request->title,
        'continent' => $request->continent,
        'content' => $request->content,
        'imageurl' => $image_name
    ]);
        return redirect('/manage');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('editarticle',['article'=>$article]);
    }
    public function update($id, Request $request){
        $article = Article::find($id);
        $article->title = $request->title;
        $article->continent = $request->continent;
        $article->content = $request->content;
        if($article->imageurl && 
        file_exists(storage_path('app/public/' . $article->imageurl)))
        {
            \Storage::delete('public/'.$article->imageurl);
        }
            $image_name = $request->file('image')->store('images', 'public');
            $article->imageurl = $image_name;
           
        $article->save();
        return redirect('/manage');
    }
        public function delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/manage');
    }
    public function cetak_pdf(){
        $article = Article::all();
        $pdf = PDF::loadview('articles_pdf',['article'=>$article]);
        return $pdf->stream();
    }
}
