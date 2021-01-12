<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citzien extends Model
{
    protected $primaryKey = 'citzien_id';


    protected $fillable = ['citzien_fullname' , 'citzien_gender', 'citzien_city', 'citzien_nid',  'citzien_mobile','citzien_address' ];
}
