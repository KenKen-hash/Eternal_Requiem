<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BurialRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'deceased_first_name',
        'deceased_last_name',
        'date_of_birth',
        'date_of_death',
        'burial_date',
        'section',
        'plot_number',
        'grave_number',
        'funeral_home',
        'next_of_kin_name',
        'next_of_kin_phone',
        'notes'
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'date_of_death' => 'date',
        'burial_date' => 'date',
    ];

    public function plot()
{
    return $this->belongsTo(Plot::class);
}

public function transfers()
{
    return $this->hasMany(PlotTransfer::class);
}
}