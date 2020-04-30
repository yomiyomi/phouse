<?php

namespace App;

public $directory = "/images/"
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
   public function getPhotoIdAttribute($value)
   {
   		return $this->directory .$value;
   }
}
