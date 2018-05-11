<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CorrectedExamination extends Model
{
    protected $fillable = ['title', 'examination_id', 'document', 'slug', 'download'];

}
