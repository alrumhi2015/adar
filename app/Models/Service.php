<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;





    public function skills()
    {
        return $this->belongsToMany(Skill::class,'skill_service', 'service_id','skill_id');
    }

}
