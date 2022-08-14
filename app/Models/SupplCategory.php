<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplCategory extends Model
{
    use HasFactory;
    protected $table = 'suppl_categories';
    protected $fillable = ['name','slug'];
}
