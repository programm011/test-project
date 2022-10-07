<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'quantiy',
        'price',
    ];

    protected $appends = ['total_price'];

    /**
     * @return string
     */
    public function getTotalPriceAttribute(): string
    {
        return number_format(
            ($this->quantiy * $this->price) *
            (1 + config('app.vat') / 100), 2);
    }
}
