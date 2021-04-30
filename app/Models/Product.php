<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'code', 'price','description', 'image', 'category_id', 'created_at', 'recommended', 'hit', 'new', 'count'];

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

    public function inStock() {
        return $this->count > 0 && !$this->trashed();
    }

    public function scopeHit($query) {
        return $query->where('hit', 1);
    }

    public function scopeNew($query) {
        return $query->where('new', 1);
    }

    public function scopeRecommended($query) {
        return $query->where('recommended', 1);
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
