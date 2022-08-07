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
        'notes',
        'user_id'
    ];

    const QualityScore = [
        '2' => 'Great Day (+2)',
        '1' => 'Good Day(+1)',
        '0' => 'Meh Day (0)',
        '-1' => 'Negative Day (-1)',
        '-2' => 'Bad Day (-2)',        
    ];

    public function scopeSort($query, $filter)
    {
        if ($filter) {
            if($filter == "day-low-high") {
                return $query->orderBy('created_at', 'asc');
            } elseif ($filter == "day-high-low") {
                return $query->orderBy('created_at', 'desc');
            } elseif($filter == "creative_work-low-high") {
                return $query->orderBy('creative_work', 'asc');
            } elseif ($filter == "creative_work-high-low") {
                return $query->orderBy('creative_work', 'desc');
            }
        }

        return $query;
    }
}