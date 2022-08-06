<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'creative_work',
        'quality_score',
        'notes'
    ];

    const QualityScore = [
        'Great Day (+2)',
        'Good Day(+1)',
        'Meh Day (0)',
        'Negative Day (-1)',
        'Bad Day (-2)',        
    ];
}