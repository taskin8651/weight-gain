<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'type',
        'price',
        'duration',
        'image',
        'is_active',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)
                    ->withPivot('start_date','end_date')
                    ->withTimestamps();
    }

    public function dietPlans()
    {
        return $this->hasMany(DietPlan::class);
    }
}

