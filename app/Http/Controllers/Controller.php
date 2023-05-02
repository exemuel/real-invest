<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function about(){
        return view('about');
    }

    public function property_grid(){
        return view('property-grid');
    }

    public function blog_grid(){
        return view('blog-grid');
    }

    public function property_single(){
        return view('property-single');
    }
}
