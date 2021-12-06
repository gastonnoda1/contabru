<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\profesion;
class personas extends Model
{
    use HasFactory;
    public $table = "personas";
    protected $fillable=['nombre','genero'];
    public function profesion()
    {
        return $this->hasOne(profesion::class);
    }
}
