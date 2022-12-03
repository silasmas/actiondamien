<?php

namespace App\Providers;

use App\Models\accueil;
use App\Models\actualite;
use App\Models\rubrique;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('welcome', function ($view) {
            $home = accueil::get();
            $newsHome = actualite::get();
            //  dd($home);
            $asavoir = $home->filter(function ($value, $key) {
                return $value->rubrique->rubrique == "Bon à savoir";
            });
            $stat = $home->filter(function ($value, $key) {
                return $value->rubrique->rubrique == "Statistique" && $value->nbr != "";
            });
            $stat2 = $home->filter(function ($value, $key) {
                return $value->rubrique->rubrique == "Statistique" && $value->nbrpays != "";
            });
            $hopitaux = $home->filter(function ($value, $key) {
                return $value->rubrique->rubrique == "Nos hopitaux";
            });
            $support = $home->filter(function ($value, $key) {
                return $value->rubrique->rubrique == "Nous soutenir";
            });
           
            //    dd($stat2);
            $view->with('bonasavoir', $asavoir);
            $view->with('stat', $stat);
            $view->with('stat2', $stat2);
            $view->with('hopitaux', $hopitaux);
            $view->with('support', $support);
            $view->with('newsHome', $newsHome);

        });
        View::composer('*', function ($view) {
            $rubriques = rubrique::all();
            $actus = actualite::all();
            $rubrique = $rubriques->filter(function ($value, $key) {
                return $value->page == "home";
            });
            $vision = $rubriques->filter(function ($value, $key) {
                return $value->page == "vision";
            });
            $news = $rubriques->filter(function ($value, $key) {
                return $value->page == "news";
            });
            $projets = $rubriques->filter(function ($value, $key) {
                return $value->page == "projects";
            });
            
            $view->with('rubriques', $rubrique);
            $view->with('vision', $vision);;
            $view->with('news', $news);
            $view->with('actus', $actus);
            $view->with('projets', $projets);
        });
    }
}
