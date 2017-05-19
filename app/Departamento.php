<?php

namespace App;

use Illuminate\Notifications\Notifiable;

class Departamento
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name',
    ];
}
