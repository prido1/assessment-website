<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Review;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\ServiceSection;

class HomeController extends Controller
{
    public function index(){
        $sections_data = Section::all();
        $services = ServiceSection::all();
        $home = $sections_data->where('type', 'home')->pluck('value', 'label');
        $about = $sections_data->where('type', 'about')->pluck('value', 'label');
        $pricing = $sections_data->where('type', 'pricing')->pluck('value', 'label');
        $footer = $sections_data->where('type', 'footer')->pluck('value', 'label');

        return view('site.home.home', compact('home', 'about', 'pricing', 'footer', 'services'));
    }
}
