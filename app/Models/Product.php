<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'price','description', 'image', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function productCount() {
        if(!is_null($this->pivot)) {
            return $this->price * $this->pivot->count;
        } else {
            return $this->price;
        }
    }
}
