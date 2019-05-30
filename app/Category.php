<?php

namespace App;

use App\News;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'status'];


    public function news(){
        return $this->hasMany(News::class);
    }
}
