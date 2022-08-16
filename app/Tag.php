<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";

    protected $fillable = ['name'];

    /* Un tag Puede estar en varios articulos */
    public function articles()
    {
        return $this->belongsToMany('App\Article')->withTimestamps();
    }

    public function scopeSearch($query, $name)
    {
    	return $query->where("name", "LIKE", "%$name%");
    }

    /* Alcance para la página principal */
    public function scopeSearchTag($query, $name){
        return $query->where('name', '=', $name);
    }

}
