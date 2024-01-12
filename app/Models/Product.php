<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = "product_id";

    protected $fillable = [
        "pname",
        "pprice",
        "pimage",
        "category_id"
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'category_id');
    }
}