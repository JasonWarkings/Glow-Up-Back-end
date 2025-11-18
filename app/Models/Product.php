<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Таблица, с которой работает модель (Laravel по умолчанию делает products)
    protected $table = 'products';

    // Разрешённые для массового заполнения поля
    protected $fillable = [
        'title',
        'description',
        'price',
        'sale_price',
        'is_new',
        'is_sale',
        'image',
        'category_id',
    ];

    // Типы полей
    protected $casts = [
        'is_new' => 'boolean',
        'is_sale' => 'boolean',
        'price' => 'decimal:2',
        'sale_price' => 'decimal:2',
    ];

    // Если нужно, можно добавить связь с категорией
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
