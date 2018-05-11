<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Exercise extends Model
{

    protected $fillable = ['title', 'document', 'school_id', 'level_id', 'matter_id', 'slug'];

    public function school(){
        return $this->belongsTo('App\School');
    }

    public function matter(){
        return $this->belongsTo(Matter::class);
    }

    public function level(){
        return $this->belongsTo(Level::class);
    }

    public function corrected_exercises(){
        return $this->belongsTo(CorrectedExercise::class);
    }
}
