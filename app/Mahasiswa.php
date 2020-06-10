<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'id_kelas',
        'foto',
    ];

    protected $dates = ['tanggal_lahir'];

    public function getNamaAttribute($nama){
        return ucwords($nama);
    }

    public function setNamaAttribute($nama){
        $this->attributes['nama'] = strtolower($nama);
    }

    public function telepon(){
        return $this->hasOne('App\Telepon', 'id_mahasiswa');
    }

    public function kelas(){
        return $this->belongsTo('App\Kelas', 'id_kelas');
    }

    public function hobi(){
        return $this->belongsToMany('App\Hobi', 'hobi_mahasiswa', 'id_mahasiswa', 'id_hobi')->withTimestamps();
    }

    public function getHobiMahasiswaAttribute(){
        return $this->Hobi->pluck('id')->toArray();
    }

    public function scopeKelas($query, $id_kelas){
        return $query->where('id_kelas', $id_kelas);
    }

    public function scopeJenisKelamin($query, $jenis_kelamin){
        return $query->where('jenis_kelamin', $jenis_kelamin);
    }
}
