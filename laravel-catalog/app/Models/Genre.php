<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Genre extends BaseModel
{
    protected $fillable = ['name', 'is_active'];
}
