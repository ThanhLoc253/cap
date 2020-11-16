<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Boxmap extends Model
{
    protected $table = 'boxmaps';
    public $timestamps = false;
    protected  $primaryKey = 'id';
    protected $fillable = ['title','description', 'Diachi','ThoiGian','lng', 'lat','patient_id'];

    public function patients(){
        return $this->belongsTo('App\Model\Patient', 'patient_id','RowID');
    }
}
