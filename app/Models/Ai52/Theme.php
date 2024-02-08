<?php

namespace App\Models\Ai52;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Theme extends Model
{
    use HasFactory;
    use HasUlids;

    /**
     * The table associated with the model.
     */
    protected $table = 'ai52_theme';

    /**
     * Mass assignable attributes.
     */
    protected $fillable = [
        'name',
        'description',
        'date'
    ];

    /**
     * Auto cast attributes.
     */
    protected $casts = [
        'date' => 'date',
    ];

    /**
     * Get the pieces for the theme.
     */
    public function pieces(): HasMany
    {
        return $this->hasMany(Piece::class, 'theme_id', 'id');
    }
}
