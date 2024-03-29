<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class officerInfo extends Model

{

    use HasApiTokens, HasFactory, Notifiable;


    use HasFactory;
    protected $table = 'officerinfo';

    protected $fillable = [

        'offId',
        'offFname',
        'offMname',
        'offLname',
        'offSuffix',
        'offContact',   
        'offAddress',
        'offDob',
        'offGender',
        'offEmail',
        'offpassword',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'offpassword',
       
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
    ];
}
