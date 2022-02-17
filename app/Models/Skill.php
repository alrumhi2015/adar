<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_name',
        'skill_status',

    ];

    public function services()
    {
        return $this->belongsToMany(Service::class,'skill_service','skill_id','service_id');
    }


    public function Category()
    {
        return $this->belongsTo(Category::class);
    }


}
