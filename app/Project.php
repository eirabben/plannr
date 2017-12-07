<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
