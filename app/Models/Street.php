<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DB;
class Street extends Model
{
    use HasFactory;
    protected $table = 'street';
    protected $fillable = [
        'bairro', 'municipe_id'
    ];
}
