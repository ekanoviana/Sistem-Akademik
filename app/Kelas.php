<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = ['nama_kelas'];

    public function mahasiswa(){
        return $this->hasMany('App\Mahasiswa', 'id_kelas');
    }
}
