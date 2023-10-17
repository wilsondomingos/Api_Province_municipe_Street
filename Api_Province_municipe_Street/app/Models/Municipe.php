<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipe extends Model
{
    use HasFactory;
    protected $table = 'municipe';
    protected $fillable = [
        'municipio','provincia_id'
    ];
}
