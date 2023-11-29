<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Portofolio extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'slug',
        'sub_title',
        'thumbnail',
        'content',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    protected static function booted(): void
    {
        parent::booted();

        static::updated(function (Portofolio $model) {
            if ($model->isDirty('thumbnail') && $model->getOriginal('thumbnail')) {
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });

        static::deleted(function (Portofolio $model) {
            if ($model->thumbnail) {
                Storage::disk('public')->delete($model->thumbnail);
            }
        });
        
    }
}
