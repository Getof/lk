<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['teacher_id', 'name', 'description', 'file_name', 'ext_img'];
}
