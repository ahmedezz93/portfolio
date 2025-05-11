<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory ;
    protected $guarded=['id'];
    protected $table="personal_infos";

    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return " ";
        }
        return asset('storage/images/personalInfo/' . $this->image);
    }

        public function getCvUrlAttribute()
    {
        if (!$this->cv) {
            return " ";
        }
        return asset('storage/images/personalInfo/' . $this->cv);
    }

}
