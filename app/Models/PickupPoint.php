<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\PreventDemoModeChanges;
use App;

class PickupPoint extends Model
{
    use PreventDemoModeChanges;

    protected $with = ['pickup_point_translations'];

    public function getTranslation($field = '', $lang = false){
        $lang = $lang == false ? App::getLocale() : $lang;
        $pickup_point_translation = $this->pickup_point_translations->where('lang', $lang)->first();
        return $pickup_point_translation != null ? $pickup_point_translation->$field : $this->$field;
    }

    public function pickup_point_translations(){
      return $this->hasMany(PickupPointTranslation::class);
    }

    public function staff(){
    	return $this->belongsTo(Staff::class);
    }

    public function scopeIsActive($query)
    {
        return $query->where('pick_up_status', '1');
    }
}
