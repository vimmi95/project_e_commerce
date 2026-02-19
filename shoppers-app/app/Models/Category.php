<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','image','is_active'];

    public function products() {
        /*One category will have many products*/
        return $this->hasMany(Product::class);
    }
}
