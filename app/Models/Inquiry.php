<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'message', 'listing_id', 'status',
    ];

    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
}
