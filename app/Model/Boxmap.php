<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Boxmap extends Model
{
    protected $table = 'boxmaps';
    public $timestamps = false;
    protected  $primaryKey = 'id';
    protected $guarded = [];
    protected $fillable = ['title','description', 'lng', 'lat','patient_id'];

}
