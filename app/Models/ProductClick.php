<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductClick extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'click_count'];

    // Relasi ke model Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}