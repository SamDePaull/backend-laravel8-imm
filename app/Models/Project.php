<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'grant_id',
        'grantee_id',
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

    // Relasi dengan Tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
