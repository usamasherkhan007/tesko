<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'name','disctription', 'video_name', 'video_path', 'status','uploaded_date_time', 'created_at', 'updated_at'
    ];
}
