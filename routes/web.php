<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('articles/{nombre?}', function($nombre="No coloc&oacute; nombre"){
    echo "Esta es la secci&oacute;n de art&iacute;culos: ".$nombre;
});
*/

/* Para un grupo de rutas */
/*
Route::group(['prefix' => 'articles'], function(){
    Route::get('view/{nombre?}', function($nombre="vacio"){
        echo "Esta es la secci&oacute;n de art&iacute;culos: ".$nombre;
    });
});
*/

/*
Route::group(['prefix' => 'articles'], function(){
    Route::get('view/{id}',[
        'uses' => 'TestController@view', 
        'as' => 'articlesView'
    ]);
});
*/

/* Rutas para usuarios */
Auth::routes();

Route::get('/', [
    'as' => 'front.index', 
    'uses' => 'FrontController@index'
]);

Route::get('categories/{name}', 
    [
        'uses' => 'FrontController@searchCategory',
        'as' => 'front.search.category'
    ]
);

Route::get('tags/{name}', 
    [
        'uses' => 'FrontController@searchTag',
        'as' => 'front.search.tag'
    ]
);

Route::get('articles/{slug}', 
    [
        'uses' => 'FrontController@viewArticle',
        'as' => 'front.view.article'
    ]
);

/* Rutas para admin */

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/logout',  ['as' => 'logout', 'uses' =>  '\App\Http\Controllers\Auth\LoginController@logout']);
    Route::get('/admin', 'LoginController@index');

    Route::get('/', ['as' => 'admin.index', function () {
        return view('admin.index');
    }]);

    Route::middleware(['admin'])->group(function(){
        Route::resource('users', 'UsersController');
        Route::get('users/{id}/destroy', 
            [
                'uses' => 'UsersController@destroy',
                'as' => 'admin.users.destroy'
            ]
        );

        Route::resource('categories', 'CategoriesController');
        Route::get('categories/{id}/destroy', 
            [
                'uses' => 'CategoriesController@destroy',
                'as' => 'admin.categories.destroy'
            ]
        );

        Route::resource('tags', 'TagsController');
        Route::get('tags/{id}/destroy', 
            [
                'uses' => 'TagsController@destroy',
                'as' => 'admin.tags.destroy'
            ]
        );
    });


    Route::resource('articles', 'ArticlesController');
    Route::get('articles/{id}/destroy', 
        [
            'uses' => 'ArticlesController@destroy',
            'as' => 'admin.articles.destroy'
        ]
    );
    Route::get('articles/{id}/confirmSendEmail', 'ArticlesController@confirmSendEmail');
    Route::post('articles/{id}/sendEmail', 'ArticlesController@sendEmail');

    Route::get('images', 
        [
            'uses' => 'ImagesController@index',
            'as' => 'admin.images.index'
        ]
    );
});




/*
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
*/
