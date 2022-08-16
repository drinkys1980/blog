<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";

    protected $fillable = ['name', 'article_id'];

    /* Una imagen se asocia a un solo articulo */
    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
