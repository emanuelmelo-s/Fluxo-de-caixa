<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

//Models
use App\Models\{Tipo};

class CentroCusto extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'centro_custos';
    protected $primaryKey = 'id_centro_custo';
    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $fillable = ['id_tipo','centro_custo']; 

   // return object;

    public function tipo()
    {
        return $this->belongsTo(Tipo::class,'id_tipo' , 'id_tipo');
    }


};


/*
 |----------------------------------------|
 |   Relacionamentos
 |                   
 |
 |----------------------------------------|


*/
