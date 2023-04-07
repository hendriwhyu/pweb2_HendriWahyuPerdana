<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_pengguna' => 'unique:users|max:50|required',
            'email' => 'required',
            'password' => 'required',
            'id_role' => 'required'
        ];
    }
    public function attributes(): array
    {
        return [
            'email' => 'Alamat Email',
            'nama_pengguna' => 'Username'
        ];
    }
    public function messages(): array
    {
        return [
            'nama_pengguna.required' => 'Masukkan Username terlebih dahulu',
            'nama_pengguna.max' => 'Masukkan Username maksimal :max karakter',
            'email.required' => 'Masukkan Email terlebih dahulu',
            'password.required' => 'Masukkan password terlebih dahulu',
            'id_role.required' => 'Pilih role terlebih dahulu',
        ];
    }

}
