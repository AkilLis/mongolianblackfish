<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class River extends Model
{
    //
    protected $table = 'rivers';
	protected $fillable = [
        'url', 'name', 'description'
    ];
}