<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $about = About::all();
        $fact = Fact::all();
        $skill = Skill::all();
        $portfolio = Portfolio::all();
        return view("admin", compact("about", "fact", "skill", "portfolio"));
    }
}
