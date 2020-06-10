<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    //

    public function getAbout(Request $r)
    {
        $about = Content::where('page', 'about')->get();

        $data = [];

        // Loading data into associative array to be able to use different sections by name
        foreach ($about as $ab) {
            if ($r->session()->get('lingo') == 'nl') {
                $data[$ab->name] = $ab->content_section_nl;
            } else {
                $data[$ab->name] = $ab->content_section;
            }
        }

        return view('pages.about', compact('data'));
    }

    public function getHome(Request $r)
    {
        $home = Content::where('page', 'home')->get();

        $data = [];

        // Loading data into associative array to be able to use different sections by name
        foreach ($home as $ho) {
            if ($r->session()->get('lingo') == 'nl') {
                $data[$ho->name] = $ho->content_section_nl;
            } else {
                $data[$ho->name] = $ho->content_section;
            }
        }

        return view('pages.home', compact('data'));
    }

    public function getPrivacyPolicy()
    {
        $privacies = Content::where('page', 'privacy')->get();

        $data = [];

        // Loading data into associative array to be able to use different sections by name
        foreach ($privacies as $privacy) {
            $data[$privacy->name] = $privacy->content_section;
        }

        return view('pages.privacy', compact('data'));
    }
}
