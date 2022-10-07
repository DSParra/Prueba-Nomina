<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table = 'empleado';
    protected $fillable = ['nombre','edad','correo','id_puesto','created_at','updated_at','isActive'];

    public function puesto(){
        return $this->belongsTo(Puesto::class,'id_puesto');
    }
}
