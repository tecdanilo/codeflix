<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Category extends BaseModel
{
    protected $fillable = ['name', 'description', 'is_active'];

}
