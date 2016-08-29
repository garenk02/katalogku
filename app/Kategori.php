<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $fillable = ['nama'];

    protected $hidden = [];

    public function katalog()
    {
    	return $this->hasMany('App\Katalog');
    }

}
