<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reus extends Model
{
    use HasFactory;

    protected $fillable = ['naam', 'description', 'geboortejaar', 'type', 'lengte', 'gewicht', 'banner_image_id', 'grid_image_id'];

    public function images(){
        return $this->hasMany(Image::class);
    }
    public function gridImage($id){
        return Image::find($id);
    }
    public function bannerImage($id){
        return Image::find($id);
    }

}
