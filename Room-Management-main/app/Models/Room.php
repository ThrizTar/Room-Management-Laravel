<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function roomtypes(){
        return $this->hasOne(Roomtype::class,'Information_No', 'Room_Informations');
    }
    protected $primaryKey = 'Room_no' ;
    public $incrementing = false;
    public $timestamps = false;
}
