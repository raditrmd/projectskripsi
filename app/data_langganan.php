<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_langganan extends Model
{
    //Table Name
    protected $table='data_langganan';
    
    //Primmary Key
    public $PrimaryKey='Kode_langganan';
    
    //field create
    protected $fillable =['Kode_langganan','Nama_langganan','Alamat','No_Tlp','Wilayah'];

    //Timestamp
    public $timestamps = true;

}