<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['headlines', 'description','category_id','image','trending'];

    protected $casts = [
        'trending' => 'boolean',
    ];
    // protected $table = 'admins';
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
