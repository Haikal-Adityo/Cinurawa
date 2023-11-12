<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Portofolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'sub_title',
        'image',
        'content',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($portfolio) {
            $portfolio->slug = Str::slug($portfolio->title);
        });

        static::updating(function ($portfolio) {
            $portfolio->slug = Str::slug($portfolio->title);
        });
    }

}
