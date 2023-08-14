<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = ['name','icon','order'];

    public array $translatable = ['name'];

    public static function create(array $array)
    {
    }

    public function products():HasMany
    {
        return $this->hasMany(Product::class);
    }
}
