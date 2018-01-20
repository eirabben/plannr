<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name', 'scheduled_for', 'project_id', 'user_id'
    ];

    protected $dates = [
        'created_at', 'updated_at', 'scheduled_for'
    ];
    

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
