<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Laracasts\Flash\Flash;
use App\Http\Requests\TagRequest;

class TagsController extends Controller
{
    public function create()
    {
        return view("admin.tags.create");
    }

    public function store(TagRequest $request)
    {
        $tag = new Tag($request->all());
        $tag->save();

        flash('La etiqueta ' . $tag->name . ' fue guardada en forma exitosa.')->success();
        return redirect()->route('tags.index');
    }

    public function index(Request $request)
    {
        $tags = Tag::search($request->name)->orderBy('id', 'ASC')->paginate(10);
        return view('admin.tags.index')->with('tags', $tags);
    }

    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        Flash::error('La etiqueta ' .$tag->name. ' fue eliminada en forma exitosa.');
        return redirect()->route('tags.index');
    }

    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tags.edit')->with('tag', $tag);
    }

    public function update(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->fill($request->all());
        $tag->save();
        Flash::warning('La etiqueta ' . $tag->name . ' fue actualizada en forma exitosa.')->success();
        return redirect()->route('tags.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
