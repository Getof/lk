<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskMat extends Model
{
    public function hints()
    {
        return $this->hasMany(Hint::class, 'task_id', 'id');
    }

    public function fileMaterials()
    {
        return $this->hasMany(FileMaterialTask::class, 'task_id', 'id');
    }
}
