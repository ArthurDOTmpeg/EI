<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    protected $fillable = [
        'titre', 'description', 'user_id', 'project_id', 'etat', 'tache_id', 'started_at', 'finished_at'
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
    
    public function children()
    {
        return $this->hasMany('App\Tache');
    }
    
    public function parent()
    {
        return $this->belongsTo('App\Tache');
    }
}
