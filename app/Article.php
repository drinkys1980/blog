<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Article extends Model
{
    use Sluggable;

    protected $table = "articles";

    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    /* Un Art�culo solo puede tener una categor�a */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /* Un Art�culo solo puede tener una usuario */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /* Una Art�culo Puede tener varias Imagenes */
    public function images()
    {
        return $this->hasMany('App\Image');
    }

    /* Una Art�culo Puede tener varios Tags */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function scopeSearch($query, $title)
    {
        return $query->where("title", "LIKE", "%$title%");
    }
}
