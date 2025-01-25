<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Category extends Model
{
    protected $fillable = [
        'id',
        'category_id',
        'name',
    ];
    public function parents(): HasMany
    {
        return $this->hasMany(Category::class);
    }
    public function childrenCategories(): HasMany
    {
        return $this->hasMany(Category::class)->with('parents');
    }
    public function children()
    {
        return $this->hasMany(Category::class, 'category_id');
    }
    public function childs()
	{
		return $this->hasMany(Category::class, 'category_id', 'id');
	}
    public function parent()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function getRootCategory()
    {
        $root = $this;
        if($this->checkIsRoot($root)) {
             while (!$this->checkIsRoot($root)) {
                $root = $root->parent;
            }

        }
       
        return $root;
    }
    public function products()
	{
        return $this->belongsToMany(
            Product::class,
            'category_product',
            'category_id',
            'product_id'
        );
	}
    public function isRoot()
    {
        return self::checkIsRoot($this);
    }
    public static function checkIsRoot(Category $category)
    {
        return is_null($category->category_id) || $category->category_id <= 0;
    }
   
 

}
