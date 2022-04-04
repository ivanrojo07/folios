<?php

namespace App\Models;

use App\Models\Campaing;
use App\Models\Establishment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RealFolio extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'folio'
    ];

    /**
     * Get the establishment that owns the RealFolio
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function establishment()
    {
        return $this->belongsTo(Establishment::class, );
    }
    
    /**
     * The campaings that belong to the RealFolio
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function campaings()
    {
        return $this->belongsToMany(Campaing::class, 'real_folio_campaings', 'real_folio_id', 'campaing_id');
    }

}
