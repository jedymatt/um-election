<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'is_open',
        'start_at',
        'end_at',
        'school_year',
        'election_type_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function electionType()
    {
        return $this->belongsTo(ElectionType::class);
    }
}
