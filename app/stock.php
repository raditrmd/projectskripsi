<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    //Table Name
    protected $table='stock';
    
    //Primmary Key
    public $PrimaryKey='Kode_Barang';
    
    //field create
    protected $fillable =['Kode_Barang','Nama_Barang','Harga_Barang','Satuan'];

    //Timestamp
    public $timestamps = true;

}