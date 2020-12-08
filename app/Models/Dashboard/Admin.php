<?php

namespace App\Models\Dashboard;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'admins';
    
    protected $gaurd = 'admin'; 

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}