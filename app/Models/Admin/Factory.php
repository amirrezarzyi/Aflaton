<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Factory extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['title','code','full_name'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
