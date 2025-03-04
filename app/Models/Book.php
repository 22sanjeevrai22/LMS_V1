<?php

namespace App\Models;
use App\Models\Category;
use App\Models\Borrow;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Book extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function borrows(){
        return $this->hasMany(Borrow::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->width(50)
            ->height(50)
            ->keepOriginalImageFormat()
            ->nonQueued();

        $this
            ->addMediaConversion('thumbnail')
            ->width(300)
            ->height(300)
            ->keepOriginalImageFormat()
            ->nonQueued();
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover')
            ->singleFile();
    }
}
