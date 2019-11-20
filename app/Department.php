<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable =  [
        'department_name'
    ];

    public function lectures(){
        return $this->belongsToMany(Lectures::class,'department_lectures');
    }
}
