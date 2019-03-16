<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    //Table Name
    protected $table='stock';
    
    //Primmary Key
    public $PrimaryKey='cSTKpk';
    
    //field create
    protected $fillable =['cSTKpk','cSTKdesc','nSTKbuy'];

    //Timestamp
    public $timestamps = true;

}