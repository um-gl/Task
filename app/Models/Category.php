<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use
        HasFactory,
        SoftDeletes;

    public function products()
    {
        return $this->hasMany('\App\Models\Product', 'category_id');
    }
    public function subcategories()
    {
        return $this->hasMany('\App\Models\Category', 'parent_id');
    }
}
