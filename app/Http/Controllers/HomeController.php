<?php

namespace App\Http\Controllers;

use App\Controllers\Controller;
use App\CorrectedExamination;
use App\CorrectedExercise;
use App\Examination;
use App\Exercise;
use App\Level;
use App\Matter;
use App\School;
use App\Section;
use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ExercisesIndex()
    {

        $datas = Exercise::OrderBy('id', 'DESC')->paginate(10);

        foreach ($datas as $data){
            $data['corrige'] = CorrectedExercise::where('exercise_id', $data->id)->first();
        }

        $matters = Matter::OrderBy('title', 'ASC')->limit(10)->get();

        $levels = Level::limit(10)->get();

        $schools = School::OrderBy('name', 'ASC')->limit(20)->get();

        $bread = 'exercises';

        return view('exercises.index', compact('datas', 'matters', 'levels', 'schools', 'bread'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ExaminationsIndex()
    {

        $datas = Examination::OrderBy('id', 'DESC')->paginate(10);

        foreach ($datas as $data){
            $data['corrige'] = CorrectedExamination::where('examination_id', $data->id)->first();
        }

        $matters = Matter::OrderBy('title', 'ASC')->limit(10)->get();

        $levels = Level::limit(10)->get();

        $schools = School::OrderBy('name', 'ASC')->limit(20)->get();

        $bread = 'examinations';

        return view('exercises.index', compact('datas', 'matters', 'levels', 'schools', 'bread'));

    }

    public function downloadExercises($id, $slug){

        $data = Exercise::findOrFail($id);
        $data->download++;
        $data->save();

        $file_path = public_path('storage/'.$data->document);

        return response()->download($file_path);
    }

    public function downloadExamination($id, $slug){

        $data = Examination::findOrFail($id);
        $data->download++;
        $data->save();

        $file_path = public_path('storage/'.$data->document);

        return response()->download($file_path);
    }

    public function downloadCorrectedExercises($id, $slug){

        $data = CorrectedExercise::findOrFail($id);
        $data->download++;
        $data->save();

        $file_path = public_path('storage/'.$data->document);

        return response()->download($file_path);
    }

    public function downloadCorrectedExaminations($id, $slug){

        $data = CorrectedExamination::findOrFail($id);
        $data->download++;
        $data->save();

        $file_path = public_path('storage/'.$data->document);

        return response()->download($file_path);
    }
}
