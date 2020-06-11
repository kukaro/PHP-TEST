<?php

namespace App\Providers;

require_once __DIR__ . "/../../routes/people.php";
require_once __DIR__ . "/../../routes/hero.php";
use Hero;
use Illuminate\Support\ServiceProvider;
use People;

// use Dodocontroller;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // dump(new People("dada"));
        $this->app->singleton("dada", function () {
            return "dadada";
        });
        $this->app->bind("People", function () {
            return new People("peo2");

        });
        $hero = $this->app->make(Hero::class);
        dump($hero);
        // $this->app->bind('App\Http\Controllers\Dodocontroller',function($app){
        //     echo 'GREAT!';
        //     dump($this->app->make("peo"));
        //     $test = new Dodocontroller($this->app->make("peo"));
        //     $test->people = $this->app->make("peo");
        //     return $test;
        // });
        dump($this->app);
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
