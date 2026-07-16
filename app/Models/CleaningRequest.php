<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CleaningRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'plot_id',
        'requester_name',
        'requester_phone',
        'requester_email',
        'relationship_to_deceased',
        'requested_date',
        'completed_at',
        'status',
        'service_type',
        'fee',
        'payment_status',
        'notes',
        'staff_notes',
    ];

    protected $casts = [
        'requested_date' => 'date',
        'completed_at'   => 'datetime',
    ];

    /**
     * Get the plot associated with this cleaning request.
     */
    public function plot()
    {
        return $this->belongsTo(Plot::class);
    }
}