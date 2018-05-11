<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Examination extends Model
{
    protected $fillable = ['title', 'document', 'slug', 'school_id', 'level_id', 'matter_id', 'download'];

    public function school(){
        return $this->belongsTo(School::class);
    }

    public function matter(){
        return $this->belongsTo(Matter::class);
    }

    public function level(){
        return $this->belongsTo(Level::class);
    }

    public function corrected_examinations(){
        return $this->belongsTo(CorrectedExercise::class);
    }
}
