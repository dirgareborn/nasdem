<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengurusRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'jabatan_id' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nik' => 'nullable',
            'status' => 'nullable',
            'tanggal_lahir' => 'nullable',
            'tempat_lahir' => 'nullable',
            'alamat' => 'nullable',
            'telepon' => 'nullable',
            'jenis_kelamin' => 'nullable',
            'agama_id' => 'nullable',
            'pendidikan' => 'nullable',
            'nomor_registrasi' => 'nullable',
        ];
    }
}
