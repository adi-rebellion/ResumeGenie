<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountsProfile extends Model
{
    protected $fillable = ['title','content'];


    public $timestamps = false;
    protected $table = 'accounts_profile';
}
