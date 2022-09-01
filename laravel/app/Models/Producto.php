<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID; 
use Illuminate\Database\Eloquent\Model;
 
class Producto extends Model
{
     use HasUUID;
     protected $table = 'productos';
     protected $primaryKey = 'id';
     public $incrementing = false;
     protected $keyType = 'string';
     protected $uuidFieldName = 'id';
}
