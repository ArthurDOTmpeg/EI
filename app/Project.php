<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function taches()
    {
        return $this->hasMany('App\Tache');
    }
}
