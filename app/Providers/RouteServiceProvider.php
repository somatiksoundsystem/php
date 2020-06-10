<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
use Somatik\Model\Album;
use Somatik\Model\Artist;
use Somatik\Model\NewsItem;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::namespace($this->namespace)
            ->group(function () {
                $renderAlbums = function () {
                    return view('albums.list', ['albums' => Album::query()->with('authors:nickname')->get()]);
                };
                Route::get('/', $renderAlbums)->name(self::HOME);

                Route::get('albums/', $renderAlbums);
                Route::get('album/{nameOrId}', function ($id) {
                    return view('albums.single', ['album' => Album::resolve($id)]);
                });
                Route::get('artists/', function () {
                    return view('artists.list', ['artists' => Artist::all()]);
                });
                Route::get('artist/{nameOrId}', function ($id) {
                    return view('artists.single', ['artist' => Artist::resolve($id)]);
                });
                Route::get('news/', function () {
                    return view('news.list', ['news' => NewsItem::query()->with('author')->get()]);
                });
            });
    }
}
