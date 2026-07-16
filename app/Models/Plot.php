<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    use HasFactory;

    protected $fillable = [
        'plot_number',
        'section',
        'row',
        'status',
        'price',
        'notes',
    ];

    /**
     * A plot can have one or more burial records (if it's a double-deep plot, or family plot).
     */
    public function burialRecords()
    {
        return $this->hasMany(BurialRecord::class);
    }

    // Add this inside your Plot model class:

public function cleaningRequests()
{
    return $this->hasMany(CleaningRequest::class);
}
} 