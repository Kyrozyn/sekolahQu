<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Users extends Model
{
    protected $primaryKey = 'email';
    public $timestamps = false;

    public function sekolah(){
        return $this->hasOne('App\Sekolah');
    }
}
