<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlotTransfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'burial_record_id',
        'old_plot_id',
        'new_plot_id',
        'transfer_date',
        'authorized_by_name',
        'authorization_document_path',
        'reason',
        'notes',
    ];

    protected $casts = [
        'transfer_date' => 'date',
    ];

    public function burialRecord()
    {
        return $this->belongsTo(BurialRecord::class);
    }

    public function oldPlot()
    {
        return $this->belongsTo(Plot::class, 'old_plot_id');
    }

    public function newPlot()
    {
        return $this->belongsTo(Plot::class, 'new_plot_id');
    }
}