<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactorItem extends Model
{
    use HasFactory;

    protected $table = 'factory_product';

    protected $fillable = ['product_id','factory_id','price','amount','number'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
