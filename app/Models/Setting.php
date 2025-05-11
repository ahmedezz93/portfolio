<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory ,HasTranslations;

    protected $guarded=['id'];
    protected $table="settings";
    public $translatable = ['name','location'];

    public function getLogoUrlAttribute()
    {
        if (!$this->logo) {
            return    asset('assets/icons/image-not-found-scaled-1150x647.png');
        } else {
            return  asset('storage/images/settings/'.$this->logo);
        }
    }


    public function getHeaderIconUrlAttribute()
    {
        if (!$this->header_icon) {
            return    asset('assets/icons/image-not-found-scaled-1150x647.png');
        } else {
            return  asset('storage/images/settings/'.$this->header_icon);
        }
    }

    public function getFooterIconUrlAttribute()
    {
        if (!$this->footer_icon) {
            return    asset('assets/icons/image-not-found-scaled-1150x647.png');
        } else {
            return  asset('storage/images/settings/'.$this->footer_icon);
        }
    }

    public function getVideoUrlAttribute()
    {
        if (!$this->video) {
            return    asset('assets/icons/image-not-found-scaled-1150x647.png');
        } else {
            return  asset('storage/images/settings/'.$this->video);
        }
    }

}
