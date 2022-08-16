<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Article;
use App\Mail\BlogArticle;
use Laracasts\Flash\Flash;
use App\Http\Requests\ArticleRequest;

use App\Category;
use App\Tag;
use App\Image;

class ArticlesController extends Controller
{
    public function create()
    {
    	$categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
    	$tags = Tag::orderBy('name', 'ASC')->pluck('name', 'id');

        return view("admin.articles.create")->with('categories', $categories)->with('tags', $tags);
    }

    public function store(ArticleRequest $request)
    {
        $name = "";
        if($request->file("image")){
            $file = $request->file("image");
            $name = "image_" . time() . "." . $file->getClientOriginalExtension();
            $path = public_path()."/images/articles/";
            $file->move($path, $name);
        }
        $article = new Article($request->all());
        $article->user_id = \Auth::user()->id;
        $article->save();

        $article->tags()->sync($request->tags);

        $image = new Image();
        $image->name = $name;
        $image->article()->associate($article);
        $image->save();

        flash('El artículo ' . $article->title . ' fue guardado en forma exitosa.')->success();
        return redirect()->route('articles.index');

    }

    public function index(Request $request)
    {
        if(\Auth::user()->isAdmin()){
            $articles = Article::Search($request->title)->orderBy('id', 'DESC')->paginate(5);
        } else {
            $articles = Article::Search($request->title)->where('user_id', '=', \Auth::user()->id)->orderBy('id', 'DESC')->paginate(5);
        }
        $articles->each(function($articles){
            $articles->category;
            $articles->user;
        });
        return view('admin.articles.index')->with('articles', $articles);
    }

    public function show(Article $article){
        /* USANDO MODELBINDING */
        if(\Auth::user()->canGetArticle($article->id)){
            $my_tags = $article->tags->pluck('name');
            $my_images = $article->images->pluck('name');
            return view('admin.articles.show')
                    ->with('article', $article)
                    ->with('my_tags', $my_tags)
                    ->with('my_images', $my_images);
        } else {
            abort(401);
        }
    }

    public function destroy($id)
    {
        if(\Auth::user()->canGetArticle($id)){
            $article = Article::findOrFail($id);
            $article->delete();
            Flash::error('El artículo ' .$article->name. ' fue eliminado en forma exitosa.');
            return redirect()->route('articles.index');
        } else {
            abort(401);
        }
    }

    public function edit($id)
    {
        if(\Auth::user()->canGetArticle($id)){
            $article = Article::findOrFail($id);
            $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id')->ToArray();
            $tags = Tag::orderBy('name', 'ASC')->pluck('name', 'id');

            $my_tags = $article->tags->pluck('id');

            return view('admin.articles.edit')->with('categories', $categories)
                    ->with('article', $article)
                    ->with('tags', $tags)
                    ->with('my_tags', $my_tags);
        } else {
            abort(401);
        }
    }

    public function update(Request $request, $id)
    {
        if(\Auth::user()->canGetArticle($id)){
            $article = Article::findOrFail($id);
            $article->fill($request->all());
            $article->save();
            $article->tags()->sync($request->tags);
            Flash::warning('El artículo ' . $article->title . ' fue actualizado en forma exitosa.')->success();
            return redirect()->route('articles.index');
        } else {
            abort(401);
        }
    }

    /* Función Personalizada */
    public function confirmSendEmail($id)
    {
        if(\Auth::user()->canGetArticle($id)){
            $article = Article::findOrFail($id);
            $my_tags = $article->tags->pluck('name');
            $my_images = $article->images->pluck('name');
            return view('admin.articles.confirmSendEmail')
                    ->with('article', $article)
                    ->with('my_tags', $my_tags)
                    ->with('my_images', $my_images);
        } else {
            abort(401);
        }
    }

    /* Función Personalizada */
    public function sendEmail(Request $request, $id)
    {
        if(\Auth::user()->canGetArticle($id)){
            $article = Article::findOrFail($id);
            Mail::to($request->get('email'))->send(new BlogArticle($article));
            return redirect('/admin/articles/'.$id.'/confirmSendEmail');
        } else {
            abort(401);
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
