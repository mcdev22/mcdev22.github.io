<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chifredaf extends Model
{
    use HasFactory;
    protected $table="chifredafs";
    protected $fillable = ['chiffre', 'id_caissier'];
}
