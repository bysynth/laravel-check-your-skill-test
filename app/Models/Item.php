<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'active'];

    // TODO Eloquent Задание 1: указать что таблица - products
    protected $table = 'products';

    public function scopeActive(Builder $query)
    {
        $query->where('active', true);
    }
}
