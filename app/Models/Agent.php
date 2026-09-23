<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'title', 'phone', 'email', 'photo_url', 'whatsapp',
    ];

    public function listings()
    {
        return $this->hasMany(Listing::class);
    }
}
