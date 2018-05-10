<?php

namespace App\Http\Controllers;


use App\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\AlertsMessages;

class ExerciseController extends Controller
{

    use AlertsMessages;

    public function store(Request $request){

        $destination_path = public_path('storage/exercises');

        $doc = $request->file('document');

        $extension = ['pdf', 'PDF', 'doc', 'DOC', 'docx', 'DOCX', 'odt', 'ODT'];

        if (!empty($doc)){

            if (!in_array($doc->getClientOriginalExtension(), $extension)){
                return back()->withInput()->with('danger', 'L\'extension de cette image n\'est pas prise en charge');
            }else{

                $newDocName = 'exercises/'.$request->input('slug').'.'.$doc->getClientOriginalExtension();

                $doc->move($destination_path, $newDocName);
            }
        }

        $data = Exercise::create([
            'title' => $request->input('title'),
            'document' => $newDocName,
            'slug' => $request->input('slug'),
            'school_id' => $request->input('school_id'),
            'level_id' => $request->input('level_id'),
            'matter_id' => $request->input('matter_id')
        ]);

        $this->alertSuccess(__('voyager::bread.success_created_bread'));
        return back();

        //
//        $request->input('name', 'exercies');
//        $dataType = Voyager::model('DataType');
//        $res = $dataType->updateDataType($request->all(), true);
//        $data = $res
//            ? $this->alertSuccess(__('voyager::bread.success_created_bread'))
//            : $this->alertError(__('voyager::bread.error_creating_bread'));
//
//        return redirect()->route('voyager.bread.index')->with($data);

//        dd($data);
//        return redirect()->route('voyager.exercises.index')->with($data);
    }

}
