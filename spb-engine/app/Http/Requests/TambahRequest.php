<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TambahRequest extends FormRequest
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
            'nama'=>'required',
            'jenis_permintaan'=>'required',
            'divisi'=>'required',
            'nama_barang'=>'required',
            'satuan'=>'required',
            'harga'=>'required',
            'tanggal'=>'required',
            'ditunjukan'=>'required',
            'keterangan'=>'required'

        ];
    }
}
