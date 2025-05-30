<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory , HasTranslations;
    protected $guarded = ['id'];
    protected $table = "projects";

    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return asset('assets/icons/aaa.png');
        }
        return asset('storage/images/myPortfolio/projects/'. $this->image);
    }
}
