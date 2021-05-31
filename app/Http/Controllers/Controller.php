<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $tours = [];
        if (!is_null(session('tour'))) {
            $tours = session('tour');
        }
        return view('landing', compact('tours'));
    }

    public function about()
    {
        $tours = [];
        if (!is_null(session('tour'))) {
            $tours = session('tour');
        }
        return view('about', compact('tours'));
    }

    public function getTour($city)
    {
        $tours = [];
        if (!is_null(session('tour'))) {
            $tours = session('tour');
        }
        $tour = DB::table('tours')->where('city', '=', $city)->first();
        return view('tour', compact('tour', 'tours'));
    }

    public function searchTour(Request $request)
    {
        $country = $request->country;
        $toursByCountry = DB::table('tours')->where('country', '=', $country)->get();
        $tours = [];
        if (!is_null(session('tour'))) {
            $tours = session('tour');
        }
        return view('search', compact('tours', 'toursByCountry'));
    }

    public function addBasket(Request $request)
    {
        session_start();
        $post = $request->all();
        $id = $post['id'];
        $city = $post['city'];
        $price = $post['price'];
        session()->put('tour.'.$id.'.'.'city', $city);
        session()->put('tour.'.$id.'.'.'price', $price);
        return back();
    }

    public function removeTour(Request $request)
    {
        $post = $request->all();
        session()->forget('tour.'.$post['remove_id']);
        return back();
    }
}
