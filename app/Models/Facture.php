<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;

class Facture extends Model
{
    use HasFactory;
    protected $table = "factures";

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_fourni');
    }
}
