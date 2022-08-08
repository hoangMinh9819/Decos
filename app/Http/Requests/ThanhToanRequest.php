<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThanhToanRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [            
            'ten' => 'required|min:6',
            'dia_chi' => 'required|min:10',
            'dien_thoai' => 'required|regex:/(0)[0-9]{9,10}/',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute là bắt buộc.',
            'min' => ':attribute phải lơn hơn :min ký tự',
            'max' => ':attribute phải nhỏ hơn :max ký tự',
            'integer' => ':attribute phải là số',
            'regex' => ':attribute không hợp lệ',
        ];
    }
    public function attributes()
    {
        return [
            'ten' => 'Họ và Tên',
            'dia_chi' => 'Địa Chỉ',
            'dien_thoai' => 'Điện Thoại',
        ];
    }
}
