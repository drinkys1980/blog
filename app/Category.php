<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ['name'];

    /* Una Categoria Puede tener varios Art�culos */
    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    /* Alcance para la p�gina principal */
    public function scopeSearchCategory($query, $name){
    	return $query->where('name', '=', $name);
    }
}
