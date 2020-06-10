<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    protected $table = 'hobi';

    protected $fillable = ['nama_hobi'];

    public function mahasiswa(){
        return $this->belongsToMany('App\Mahasiswa', 'hobi_mahasiswa', 'id_hobi', 'id_mahasiswa');
    }
}
