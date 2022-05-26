<?php

namespace App/Model;

use Illuminate\Database\Eloquent\Model;

class Classeooms extends Model 
{

    protected $table = 'classeooms';
    public $timestamps = true;

    public function Grades()
    {
        return $this->belongsTo('Grade', 'Grade_id');
    }

}