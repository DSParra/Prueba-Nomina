<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    use HasFactory;
    protected $table = 'puesto';
    protected $fillable = ['nombre','descripcion','sueldo_base','gratificacion','despensa','created_at','updated_at'];

    public function empleados(){
        return $this->hasMany(Empleado::class,'id');
    }
}
