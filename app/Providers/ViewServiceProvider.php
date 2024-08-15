<?php

namespace App\Providers;

use App\Models\accueil;
use App\Models\actualite;
use App\Models\air;
use App\Models\centre;
use App\Models\projet;
use App\Models\rubrique;
use App\Models\temoignage;
use App\Models\zone;
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
            $newsHome = actualite::orderBy('annee', 'desc')->get();
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
        View::composer('livewire.*', function ($view) {
            $home = accueil::get();
            $newsHome = actualite::orderBy('annee', 'desc')->get();
            // $slides = slide::get();
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

            // dd($stat2);
            // $view->with('slides', $slides);
            $view->with('bonasavoir', $asavoir);
            $view->with('stat', $stat);
            $view->with('stat2', $stat2);
            $view->with('hopitaux', $hopitaux);
            $view->with('support', $support);
            $view->with('newsHome', $newsHome);

        });
        View::composer('*', function ($view) {
            $rubriques = rubrique::all();
            $actus = actualite::orderBy('annee', 'desc')->get();
            $tem = temoignage::orderBy('created_at', 'desc')->get();
            $projet = projet::all();
            $zone = zone::all();
            $air = air::with('zone')->get();
            $centre = centre::with('air')->get();

            // dd($centre);
            $rubrique = $rubriques->filter(function ($value, $key) {
                return $value->page == "home";
            });
            $videos = $tem->filter(function ($value, $key) {
                return !empty($value->lien);
            });

            $sensible = $tem->filter(function ($value, $key) {
                return empty($value->lien);
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
            $video = $rubriques->filter(function ($value, $key) {
                return $value->page == "testimonials";
            });
            $sensibilisation = $rubriques->filter(function ($value, $key) {
                return $value->page == "sensibilization";
            });
            // dd($sensibilisation->orderBy('created_at', 'desc'));
            $view->with('rubriques', $rubrique);
            $view->with('vision', $vision);;
            $view->with('news', $news);
            $view->with('actus', $actus);
            $view->with('projets', $projets);
            $view->with('projet', $projet);
            $view->with('video', $video);
            $view->with('videos', $videos);
            $view->with('sensible', $sensible);
            $view->with('sensibilisation', $sensibilisation);
            $view->with('zones', $zone);
            $view->with('airs', $air);
            $view->with('centres', $centre);
        });
    }
}
