<?php

namespace App\Http\Controllers;

use App\Exercise;
use App\Level;
use App\School;
use App\Section;
use App\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $slides = Slide::where('statut', 1)->OrderBy('id', 'DESC')->limit(3)->get();
        $sections = Section::get();

        // les ecole
        $schools = School::where('statut', 1)->OrderBy('id', 'DESC')->limit(8)->get();

        // compté les niveaux de l'ecole

//        foreach ($schools as $school){
//            $school['level'] = count(Level::where('school_id', $school->id)->get());
//        }

        // exercise
        $exercises = Exercise::OrderBy('id', 'DESC')->limit(8)->get();

        return view('home.index', compact('slides', 'sections', 'schools', 'exercises'));
    }
}
