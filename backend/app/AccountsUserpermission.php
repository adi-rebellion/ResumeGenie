<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountsUserpermission extends Model
{
    protected $fillable = ['title','content'];


    public $timestamps = false;
    protected $table = 'accounts_userpermission';
}
