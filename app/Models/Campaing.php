<?php

namespace App\Models;

use App\Models\FakeFolio;
use App\Models\RealFolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campaing extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];

    /**
     * Get all of the fake_folios for the Campaing
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fake_folios()
    {
        return $this->hasMany(FakeFolio::class);
    }

    
    /**
     * The real_folios that belong to the Campaing
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function real_folios()
    {
        return $this->belongsToMany(RealFolio::class, 'real_folio_campaings', 'campaing_id', 'real_folio_id');
    }
}
