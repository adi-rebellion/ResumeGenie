<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSkill extends Model
{
    protected $fillable = ['title','content'];


    public $timestamps = false;
    protected $table = 'job_skill';
}
