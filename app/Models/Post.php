<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'thumbnail',
        'content',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    protected static function booted(): void
    {
        parent::booted();

        static::updated(function (Post $model) {
            if ($model->isDirty('thumbnail') && $model->getOriginal('thumbnail')) {
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });
    }

}
