<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = ['teacher_id', 'name', 'description', 'img_name'];
}
