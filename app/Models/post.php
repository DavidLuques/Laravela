<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    use HasFactory; 
    protected $table = 'post'; // Especifica que el modelo usa la tabla 'post'

    protected function casts():array{
        return[
            'published_at'=>'datetime',
        ];
    }

    
    protected function title():Attribute{
        return Attribute::make(
            set: function($value){
                return strtolower($value);
            }
        );
    } 
}
