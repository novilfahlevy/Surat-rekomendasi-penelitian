<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengajuanMahasiswaRequest extends FormRequest
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
            'nama_lengkap' => 'required|string|max:255',
            'nim' => 'required|numeric|unique:mahasiswa',
            'email' => 'required|email|max:255|unique:mahasiswa',
            'no_hp' => 'required|numeric|unique:mahasiswa',
            'alamat_peneliti' => 'required|string',
            'nama_instansi' => 'required|string|max:255',
            'alamat_instansi' => 'required|string',
            'jurusan' => 'required|string|max:255',
            'judul_penelitian' => 'required|string',
            'lama_penelitian' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'lokasi_penelitian' => 'required|string',
            'tujuan_penelitian' => 'required|string',
            'anggota_peneliti' => 'required|string',
            'surat_pengantar_instansi' => 'required|file|mimes:pdf|max:2048',
            'proposal_penelitian' => 'required|file|mimes:pdf|max:2048',
            'ktp' => 'required|file|mimes:pdf,jpeg,jpg,png|max:2048',
            'status' => 'required|string',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'nama_lengkap' => 'Nama lengkap',
            'nim' => 'NIM',
            'email' => 'Email',
            'no_hp' => 'Nomor HP',
            'alamat_peneliti' => 'Alamat peneliti',
            'nama_instansi' => 'Nama instansi',
            'alamat_instansi' => 'Alamat instansi',
            'jurusan' => 'Jurusan/Fakultas',
            'judul_penelitian' => 'Judul penelitian',
            'lama_penelitian' => 'Lama penelitian',
            'tanggal_mulai' => 'Tanggal mulai',
            'tanggal_selesai' => 'Tanggal selesai',
            'lokasi_penelitian' => 'Lokasi penelitian',
            'tujuan_penelitian' => 'Tujuan penelitian',
            'anggota_peneliti' => 'Anggota peneliti',
            'surat_pengantar_instansi' => 'Surat pengantar instansi',
            'proposal_penelitian' => 'Proposal penelitian',
            'ktp' => 'KTP',
            'status' => 'Status',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi.',
            'string' => ':attribute harus berupa teks.',
            'max' => ':attribute maksimal :max karakter.',
            'email' => ':attribute harus berupa alamat email yang valid.',
            'date' => ':attribute harus berupa tanggal yang valid.',
            'after_or_equal' => ':attribute harus setelah atau sama dengan tanggal mulai.',
            'unique' => ':attribute sudah terdaftar.',
            'file' => ':attribute harus berupa file.',
            'mimes' => ':attribute harus berupa file dengan tipe: :values.',
            'max' => ':attribute tidak boleh lebih dari 2 MB.',
            'numeric' => ':attribute harus berupa angka.',
        ];
    }
}