<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'location', 'address', 'type',
        'price', 'status', 'bedrooms', 'bathrooms', 'size_sqm',
        'primary_image_url', 'gallery_images', 'agent_id', 'is_featured',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'is_featured' => 'boolean',
        'price' => 'decimal:2',
    ];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }
}
