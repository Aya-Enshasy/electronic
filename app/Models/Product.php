<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = ['id', 'category_id', 'name', 'image', 'status', 'description', 'description'];

    protected $hidden = ['created_at', 'updated_at', 'category'];

    protected $appends = ['dish_category_name'];

    public function category()
    {
       return $this->belongsTo(Category::class, 'category_id', 'id')->withDefault(['name' => 'no related category']);
    }

    public function getDishCategoryNameAttribute()
    {
        return $this->category ? $this->category->title : 'category not found';
    }

    public function getCategoryNameAttribute()
    {
        return $this->category ? $this->category->name : 'category not found';
    }

}
