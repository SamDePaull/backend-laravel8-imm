<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grantee extends Model
{
    use HasFactory;

    protected $fillable = [
        'grantee_name',
        'address',
        'contact',
    ];

    // Relasi dengan Grant
    public function grants()
    {
        return $this->hasMany(Grant::class);
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