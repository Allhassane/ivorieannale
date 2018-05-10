<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Exercise extends Model
{

    protected $fillable = ['title', 'document', 'school_id', 'level_id', 'matter_id', 'slug'];
    
}
