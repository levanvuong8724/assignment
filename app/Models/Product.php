<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ="products";
    public $primaryKey = "id";
    protected $fillable = [
        'name',
        'image',
        'price',
        'quantity',
        'view',
        'category_id',
        'is_active'
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
