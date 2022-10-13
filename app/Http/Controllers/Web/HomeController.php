<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * GET: Change language
     *
     * @param  $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeLanguage($locale)
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->back();
    }

    /**
     * GET: Home page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * GET: Home page
     *
     * @return \Illuminate\View\View
     */
    public function vision()
    {
        return view('vision');
    }

    /**
     * GET: Home page
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    /**
     * GET: Home page
     *
     * @return \Illuminate\View\View
     */
    public function supportUs()
    {
        return view('support_us');
    }

    /**
     * GET: Home page
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * GET: Home page
     *
     * @return \Illuminate\View\View
     */
    public function news()
    {
        return view('news');
    }

    /**
     * GET: Home page
     *
     * @return \Illuminate\View\View
     */
    public function testimonials()
    {
        return view('testimonials');
    }

    /**
     * GET: Home page
     *
     * @return \Illuminate\View\View
     */
    public function sensibilization()
    {
        return view('sensibilization');
    }

    /**
     * GET: Home page
     *
     * @return \Illuminate\View\View
     */
    public function projects()
    {
        return view('projects');
    }
}
