<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bancaria extends Model
{
    use HasFactory;
    public $table = "bancaria";
    protected $fillable=['micuenta'];
}
