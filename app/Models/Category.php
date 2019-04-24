<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $guarded = ['id'];

	public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    public function child()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post','post_category');
    }

}
