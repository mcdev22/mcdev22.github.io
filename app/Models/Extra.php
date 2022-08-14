<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SupplCategory;

class Extra extends Model
{
    use HasFactory;
     protected $table = 'extras';
     protected $fillable = [
        'name',
        'price',
        'cat_suppl_id'
    ];

    public function category()
    {
        return $this->belongsTo(SupplCategory::class,'cat_suppl_id');
    }
}
