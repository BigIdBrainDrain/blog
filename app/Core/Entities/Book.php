<?php

namespace App\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    //
    use SoftDeletes;
    protected $table='books';
    //protected $connection='mysql';
    protected $fillable=['title','description','picture','category_id'];// matching entre vista y controlador

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
