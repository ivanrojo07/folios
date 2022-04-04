<?php

namespace App\Models;

use App\Models\Campaing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FakeFolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'folio',
        'real_folio_id'
    ];

    /**
     * Get all of the campaings for the FakeFolio
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function real_folio()
    {
        return $this->belongsTo(RealFolio::class);
    }
}
