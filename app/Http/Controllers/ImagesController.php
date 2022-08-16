<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImagesController extends Controller
{
    public function index(Request $request)
    {
    	/*
        $images = Article::Search($request->title)->orderBy('id', 'DESC')->paginate(5);
        $articles->each(function($articles){
            $articles->category;
            $articles->user;
        });
        */
        $images = Image::all();
        $images->each(function($images){
            $images->article;
        });
        return view('admin.images.index')->with('images', $images);
    }
}
