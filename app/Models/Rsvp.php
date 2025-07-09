<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    protected $fillable = [
        'name',
        'attending',
        'relationship',
        'message'
    ];

    protected $casts = [
        'attending' => 'boolean'
    ];
}
