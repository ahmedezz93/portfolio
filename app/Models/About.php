<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Translatable\HasTranslations;
use Spatie\Translatable\Translatable;

class About extends Model
{
    use HasFactory ,HasTranslations;
    protected $guarded=['id'];
    protected $table="abouts";
    public $translatable= ['title','description'];

    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return " ";
        }
        return asset('storage/images/about/' . $this->image);
    }

    public function images(){
        return $this->hasMany(Image::class,'about_id');
    }

}
