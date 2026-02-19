<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','image','is_active'];

    public function products() {
        /*One brand will have many products*/
        return $this->hasMany(Product::class);
    }
}
