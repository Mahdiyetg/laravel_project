<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function coach(){
        return $this->belongsTo(User::class,'coach_id');
    }

    public function users(){
        return $this->hasMany(User::class,"user_is");
}
}
