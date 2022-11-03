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
     * GET: Vision page
     *
     * @return \Illuminate\View\View
     */
    public function vision()
    {
        return view('vision');
    }

    /**
     * GET: About page
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    /**
     * GET: Support page
     *
     * @return \Illuminate\View\View
     */
    public function supportUs()
    {
        return view('support_us');
    }

    /**
     * GET: Contact page
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * GET: News page
     *
     * @return \Illuminate\View\View
     */
    public function news()
    {
        return view('news');
    }

    /**
     * GET: Testimonials page
     *
     * @return \Illuminate\View\View
     */
    public function testimonials()
    {
        return view('testimonials');
    }

    /**
     * GET: Sensibilization page
     *
     * @return \Illuminate\View\View
     */
    public function sensibilization()
    {
        return view('sensibilization');
    }

    /**
     * GET: Projects page
     *
     * @return \Illuminate\View\View
     */
    public function projects()
    {
        return view('projects');
    }

    /**
     * GET: Donation page
     *
     * @return \Illuminate\View\View
     */
    public function donate()
    {
        return view('donate');
    }

    /**
     * GET: Mapping page
     *
     * @return \Illuminate\View\View
     */
    public function hospMap()
    {
        return view('hosp_map');
    }
}
