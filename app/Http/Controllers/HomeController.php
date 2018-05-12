<?php

namespace App\Http\Controllers;

use App\Actualite;
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
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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

        // exercise
        $exercises = Exercise::OrderBy('id', 'DESC')->limit(5)->get();

        foreach ($exercises as $data){
            $data['corrige'] = CorrectedExercise::where('exercise_id', $data->id)->first();
        }

        // examination
        $examinations = Examination::OrderBy('id', 'DESC')->limit(5)->get();

        foreach ($examinations as $data){
            $data['corrige'] = CorrectedExamination::where('examination_id', $data->id)->first();
        }

        $matters = Matter::OrderBy('title', 'ASC')->limit(10)->get();
        $levels = Level::get();

        $blogIndex = Actualite::where('statut', 1)->OrderBy('id', 'DESC')->first();
        $blogs = Actualite::where('id', '<>', $blogIndex->id)->where('statut', 1)->OrderBy('id', 'DESC')->limit(3)->get();

        return view('home.index', compact(
            'slides',
            'sections',
            'schools',
            'exercises',
            'bread',
            'matters',
            'examinations',
            'levels',
            'blogIndex',
            'blogs'
        ));
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ByCategoryIndex()
    {

        $id = Input::get('bread_id');
        $slug = Input::get('slug');
        $bread = Input::get('bread');

        if (empty($id) OR empty($slug) OR empty($bread)){
            return redirect('/404');
        }

        if ($bread == 'matters') {
            $examinations = Examination::where('matter_id', $id)->OrderBy('id', 'DESC')->paginate(10);
            $exercises = Exercise::where('matter_id', $id)->OrderBy('id', 'DESC')->paginate(10);

            $title = 'matters';
        }elseif ($bread == 'levels'){
            $examinations = Examination::where('level_id', $id)->OrderBy('id', 'DESC')->paginate(10);
            $exercises = Exercise::where('level_id', $id)->OrderBy('id', 'DESC')->paginate(10);

            $title = 'levels';
        }elseif ($bread == 'schools'){
            $examinations = Examination::where('school_id', $id)->OrderBy('id', 'DESC')->paginate(10);
            $exercises = Exercise::where('school_id', $id)->OrderBy('id', 'DESC')->paginate(10);

            $title = 'schools';
        }

        foreach ($examinations as $data){
            $data['corrige'] = CorrectedExamination::where('examination_id', $data->id)->first();
        }
        foreach ($exercises as $data){
            $data['corrige'] = CorrectedExercise::where('exercise_id', $data->id)->first();
        }

        $matters = Matter::OrderBy('title', 'ASC')->limit(10)->get();

        $levels = Level::limit(10)->get();

        $schools = School::OrderBy('name', 'ASC')->limit(20)->get();

        return view('category.index', compact('exercises', 'examinations','matters', 'levels', 'schools', 'title'));
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

    public function blog(){

        $datas = Actualite::OrderBy('id', 'DESC')->paginate(6);

        $matters = Matter::OrderBy('title', 'ASC')->limit(10)->get();

        $levels = Level::limit(10)->get();

        $schools = School::OrderBy('name', 'ASC')->limit(20)->get();

        return view('blog.index', compact('datas', 'matters', 'levels', 'schools'));
    }

    public function blogShow($slug){

        $data = Actualite::where('slug', $slug)->first();

        if (empty($data)){
            return redirect('/404');
        }

        $matters = Matter::OrderBy('title', 'ASC')->limit(10)->get();

        $levels = Level::limit(10)->get();

        $schools = School::OrderBy('name', 'ASC')->limit(20)->get();

        return view('blog.show', compact('data', 'matters', 'levels', 'schools'));
    }

    public function contacts(){

        return view('home.contact');
    }

    public function contactSend(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }else{

            $email_user = $request->get('email');
            $name = $request->get('name');
            $mobile = htmlspecialchars($request->input('mobile'));

            Mail::send('email.contact',
                array(
                    'nom' => $request->get('name'),
                    'mobile' => $request->get('mobile'),
                    'email' => $request->get('email'),
                    'user_message' => $request->get('message')
                ), function($message) use ($email_user, $mobile, $name)
                {
                    $message->from($email_user);
                    $message->to(setting('site.email'), 'Ivoire Annale')->subject('Message de '. $name);
                });

        }

        return back()->with('success', 'Merci de nous avoir contactez !');
    }

}
