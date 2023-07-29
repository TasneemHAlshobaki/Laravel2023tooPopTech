<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory , SoftDeletes;
    protected $table = 'books';



    public function category () {
        return $this->belongsTo('App\Models\Category'); 
    }
}
