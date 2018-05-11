<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CorrectedExercise extends Model
{
    protected $fillable = ['title', 'exercise_id', 'document', 'slug', 'download'];

}
