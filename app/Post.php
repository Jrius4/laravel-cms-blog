<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function user(){
        return $this -> belongsTo('App\User');
        
    }

    public function getImageUrlAttribute($value)
    {
        $imageUrl ="";
        if(! is_null($this->image))
        {
            $imagePath= public_path()."/fontend/img/".$this->image;
            if(file_exists($imagePath)) $imageUrl=asset('fontend/img/'.$this->image);
        }

        return $imageUrl;
    }
}
