<?php

namespace App\Models;

use App\Models\Establishment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Place extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'state',
        'city',
    ];

    /**
     * The establishments that belong to the Place
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function establishments()
    {
        return $this->belongsToMany(Establishment::class, 'establishment_places', 'place_id', 'establishment_id');
    }
}
