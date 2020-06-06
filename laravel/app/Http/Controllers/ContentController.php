<?php

namespace App\Http\Controllers;

use App\Content;

class ContentController extends Controller
{
    //

    public function getAbout()
    {
        $about = Content::where('page', 'about')->get();

        $data = [];

        // Loading data into associative array to be able to use different sections by name
        foreach ($about as $ab) {
            $data[$ab->name] = $ab->content_section;
        }

        return view('pages.about', compact('data'));
    }

    public function getHome()
    {
        $home = Content::where('page', 'home')->get();

        $data = [];

        // Loading data into associative array to be able to use different sections by name
        foreach ($home as $ho) {
            $data[$ho->name] = $ho->content_section;
        }

        return view('pages.home', compact('data'));
    }

    public function getPrivacyPolicy()
    {
        $privacy = Content::where('name', 'privacy')->first();

        return view('pages.privacy', compact('privacy'));
    }
}
