<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthUser extends Model
{
    /**
 * The table associated with the model.
 *
 * @var string
 */
protected $fillable = ['title','content'];


    public $timestamps = false;
    protected $table = 'auth_user';
}
