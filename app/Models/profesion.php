<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\personas;
use Illuminate\Database\Eloquent\Builder;
class profesion extends Model
{
    use HasFactory;
    public $table = "profesion";
    protected $hidden = [
        'personas_id',
    ];
    public function personas()
    {
        return $this->belongsTo(personas::class);
    }
    public function ScopeProbando()
    {
       return personas::whereHas('profesion', function (Builder $query) {

       })->select('nombre');
    }
    public function getCompany(){

        if(isset($this->personas_id))
        {
            return "gato";
        }

        return 'Sin Empresa Asociada';

    }
    public function otro()
    {
        return "hola";
    }
}
