<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integrant extends Model
{
    protected $fillable = [
        'name',
        'email',
        'description',
        'charge',
        'title',
        'photo',
        'cv'
    ];
}
