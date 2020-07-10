<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileMaterialTask extends Model
{
    public function fileId()
    {
        return $this->belongsTo(File::class, 'id','id_file_materials');
    }
}
