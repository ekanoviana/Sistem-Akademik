<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    protected $table = 'telepon';
    protected $primaryKey = 'id_mahasiswa';
    protected $fillable = ['id_mahasiswa', 'nomor_telepon'];

    public function mahasiswa(){
        return $this->belongsTo('App\Mahasiswa', 'id_mahasiswa');
    }
}
