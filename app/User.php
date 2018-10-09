<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 'group_id',
    ];

    public function group(){
        return $this->belongsTo('App\Group', 'group_id');
    }

    protected $table = 'user';
}

