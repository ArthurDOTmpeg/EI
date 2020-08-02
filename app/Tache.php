<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    protected $fillable = [
        'titre', 'description', 'user_id', 'project_id', 
    ];
     
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    
    public function informations()
    {
        return $this->hasMany('App\Information');
    }
    
    public function projects()
    {
        return $this->belongsTo('App\Project');
    }
}
