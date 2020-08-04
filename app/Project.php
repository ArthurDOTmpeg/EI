<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'nom', 'description',
    ];
    
    public function taches()
    {
        return $this->hasMany('App\Tache');
    }
}
