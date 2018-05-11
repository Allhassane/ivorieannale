<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Examination extends Model
{
    protected $fillable = ['title', 'document', 'slug', 'school_id', 'level_id', 'matter_id', 'download'];

}
