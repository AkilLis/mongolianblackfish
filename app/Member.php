<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table = 'members';
	protected $fillable = [
        'url', 'name', 'description', 'major', 'role'
    ];

    public function tours()
    {
    	return $this->hasMany('App\Tour');
    }
}