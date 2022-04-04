<?php

namespace App\Models;

use App\Models\Place;
use App\Models\RealFolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Establishment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'establishment_id',
    ];

    /**
     * Get all of the real_folio for the Establishment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function real_folio()
    {
        return $this->hasMany(RealFolio::class);
    }

    /**
     * The places that belong to the Establishment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function places()
    {
        return $this->belongsToMany(Place::class, 'establishment_places', 'establishment_id', 'place_id');
    }
}
