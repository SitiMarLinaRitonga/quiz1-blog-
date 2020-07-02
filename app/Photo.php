<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
protected $table = "tb_photo";
protected $primaryKey = 'photo_id';
protected $fillable = ['photo_title', 'photo_text', 'photo_upload'];
}

