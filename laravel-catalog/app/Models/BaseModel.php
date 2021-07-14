<?php


namespace App\Models;


use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseModel
 * @package App\Models
 */
class BaseModel extends Model
{
    protected $casts = [
        'id' => 'string'
    ];
    public static function boot(){
        parent::boot();
        static::creating(function($obj){
            $obj->id = Uuid::uuid4();
        });
    }
}
