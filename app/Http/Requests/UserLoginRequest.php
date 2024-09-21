<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required | email | exists:users,email',
            'password' => 'required|min:6'
            
        ];
    }

    public function messages()
    {
        return[
                'email.required' => "Không được để trống email",
                'email.email' => "Email không đúng định dạng",
                'email.exists' => "Email chưa được đăng ký",
                'password.required' => "Không đươc để trống password",
                'password.min' => "Độ dài password quá ngắn"
        ];
    }
}
// Bài 1
// From Đăng ký
// ''name' => 'required | max:100',
// 'email' => 'required|email|unique:users,email',
// 'password' => 'required|min:8|confirmed'

// Bài 2
//  Tạo form update hồ sơ người dùng gồm

// 'email' => 'required|email|unique:users,email,'.$this->userId,
// 'age' => 'nullable | interger | min:18 | max:100',
// 'avatar' => 'nullbale | file |minmes:jpeg,jpg,png|max 2048',
// 'password' => 'required|min:8|confirmed'

// Bài 3: Tạo form xác thực thông tin đặt hàng 
// 'is_shipping_address_same' => 'required| boolean' ,
// 'shipping_address' => 'required_if:is_shipping_address_same,true',

// Bài 4: Tạo form nhận phản hồi của người dùng:
    // 'user_id' => 'required|exists:users,id',
    //  'vote_star' => 'required|integer|min:1| max',
    // 'feedback' => 'required|string|min:50|max:500'
// mess
// 'user_id' => 1,
// 'vote_star' => 4,
// 'feedback' => 'Sản phẩm rất tuyệt vời, tôi rất hài lòng với nó.'
//
//Bài 5: Tạo form đăng ký khóa học

// 
//     'name' => 'required|string|min:5|max:20',
//     'birth_day' => 'required|date_format:d/m/Y',
//     'province' => 'nublable|string',
//     'district' => 'string|'required_if:province,!null',
// 


//     'name.required' => 'Tên khóa học là bắt buộc.',
//     'name.min' => 'Tên khóa học phải có ít nhất 5 ký tự.',
//     'name.max' => 'Tên khóa học không được vượt quá 20 ký tự.',
//     'birth_day.required' => 'Ngày sinh là bắt buộc.',
//     'birth_day.date_format' => 'Ngày sinh không đúng định dạng.',
//     'province.required' => 'Tỉnh/Thành phố là bắt buộc.',
//     'province.exists' => 'Tỉnh/Thành phố không hợp lệ.',
//     'district.required' => 'Quận/Huyện là bắt buộc.',
//     'district.exists' => 'Quận/Huyện không hợp lệ.',
// ]);

// Bài 6  Thay đổi thông tin người dùng
// 'username' => 'required|string|unique:users,username',
// 'phone_number' => 'nullable|regex:/^(+?[\d\s-()]{7,15})$/',
