<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'title',
        'about',
        'thumbnail',
        'thumbnail2',
        'thumbnail3',
        'thumbnail4',
        'appearance',
        'mesh',
        'plant_used',
        'appearance',
        'active_ingridient',
        'sample',
        'self_life',
        'about',
        'price',
        'is_open',
        'category_id',
    ];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value); 
    }

    public function ports(): HasMany
    {
        return $this->hasMany(Port::class);
    }
    public function packings(): HasMany
    {
        return $this->hasMany(Packing::class);
    }
         public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}