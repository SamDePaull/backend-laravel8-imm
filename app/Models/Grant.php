<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grant extends Model
{
    use HasFactory;

    protected $fillable = [
        'grant_name',
        'description',
        'start_date',
        'end_date',
        'funding_amount',
    ];

    // Relasi dengan Grantee
    public function grantee()
    {
        return $this->belongsTo(Grantee::class);
    }

    // Relasi dengan Funding
    public function fundings()
    {
        return $this->hasMany(Funding::class);
    }

    // Relasi dengan Project
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}