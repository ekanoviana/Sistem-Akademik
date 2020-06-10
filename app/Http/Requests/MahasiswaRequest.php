<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if($this->method() == 'PATCH'){
            $nim_rules = 'required|string|size:4|unique:Mahasiswa,nim,'.$this->get('id');
            $telepon_rules = 'sometimes|nullable|numeric|digits_between:10,15|unique:Telepon,nomor_telepon,'.$this->get('id').',id_mahasiswa';
        }else{
            $nim_rules = 'required|string|size:4|unique:Mahasiswa,nim';
            $telepon_rules = 'sometimes|nullable|numeric|digits_between:10,15|unique:Telepon,nomor_telepon';
        }
        return [
            'nim' => $nim_rules,
            'nama' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'nomor_telepon' => $telepon_rules,
            'id_kelas' => 'required',
            'foto' => 'sometimes|nullable|image|mimes:jpeg,jpg,png|max:500',
        ];
    }
}
