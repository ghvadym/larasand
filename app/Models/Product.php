<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'price','description', 'image', 'category_id', 'created_at', 'recommended', 'hit', 'new'];

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

    public function setNewAttribute($value) {
        $this->attributes['new'] = $value === 'on' ? 1 : 0;
    }

    public function setHitAttribute($value) {
        $this->attributes['hit'] = $value === 'on' ? 1 : 0;
    }

    public function setRecommendedAttribute($value) {
        $this->attributes['recommended'] = $value === 'on' ? 1 : 0;
    }

    public function isHit() {
        return $this->hit === 1;
    }

    public function isNew() {
        return $this->new === 1;
    }

    public function isRecommended() {
        return $this->recommended === 1;
    }
}
