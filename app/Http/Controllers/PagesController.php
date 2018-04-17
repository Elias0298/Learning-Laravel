<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Laravel';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'Design']
        );
        return view('pages.services')->with($data);
    }
    public function about() {
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }
}