<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funding extends Model
{
    use HasFactory;

    protected $fillable = [
        'grant_id',
        'grantee_id',
        'funding_amount',
        'funding_date',
        'source',
    ];

    // Relasi dengan Grant
    public function grant()
    {
        return $this->belongsTo(Grant::class);
    }

    // Relasi dengan Grantee
    public function grantee()
    {
        return $this->belongsTo(Grantee::class);
    }
}
