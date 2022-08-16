<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /* Un usuario Puede tener varios Artículos */
    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    /* PARA QUE INDIQUE SI ES ADMIN O NO */
    public function isAdmin(){
        return $this->type === 'admin';
    }

    /* INDICA SI PUEDE ACCEDER A UN DETERMINADO ARTÍCULO */
    /* SI ES ADMIN, PUEDE ACCEDER A TODOS, DE LO CONTRARIO EL MIEMBRO SOLO PUEDE ACCEDER A SUS ARTÍCULOS */
    public function canGetArticle($id){
        if($this->type === 'admin'){
            return true;
        } else {
            if(\DB::table('articles')->where([['id', '=', $id], ['user_id', '=', $this->id]])->exists()){
                return true;
            } else {
                return false;
            }
        }
    }
}
