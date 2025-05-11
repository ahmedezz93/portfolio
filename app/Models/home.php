<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Home extends Model
{
    use HasFactory,HasTranslations;
    protected $guarded=['id'];
    protected $table="home";
    public $translatable = ['first_zone_title','first_zone_description','second_zone_title','second_zone_mini_description','second_zone_item_1_description','second_zone_item_2_description','second_zone_item_3_description','third_zone_mini_description_item_one','third_zone_mini_description_item_two','third_zone_mini_description_item_three','third_zone_mini_description_item_four','fourth_zone_title','fourth_zone_description'];

    public function getFirstZoneImageUrlAttribute()
    {
        if (!$this->first_zone_image) {
            return    asset('assets/icons/image-not-found-scaled-1150x647.png');
        } else {
            return  asset('storage/images/home/'.$this->first_zone_image);
        }
    }

    public function getFourthZoneImageUrlAttribute()
    {
        if (!$this->fourth_zone_image) {
            return    asset('assets/icons/image-not-found-scaled-1150x647.png');
        } else {
            return  asset('storage/images/home/'.$this->fourth_zone_image);
        }
    }

    public function getSecondZoneImageUrlAttribute()
    {
        if (!$this->second_zone_image) {
            return    asset('assets/icons/image-not-found-scaled-1150x647.png');
        } else {
            return  asset('storage/images/home/'.$this->second_zone_image);
        }
    }

    public function getThirdZoneImageUrlAttribute()
    {
        if (!$this->third_zone_image) {
            return    asset('assets/icons/image-not-found-scaled-1150x647.png');
        } else {
            return  asset('storage/images/home/'.$this->third_zone_image);
        }
    }

}
