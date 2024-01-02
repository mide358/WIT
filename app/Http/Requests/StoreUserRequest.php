<?php

namespace App\Http\Requests;

use App\Http\Enums\RoleEnums;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
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
        $rules = [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|string|unique:users',
            'username' => 'required|string|unique:users',
            'phone_number' => 'required|string|unique:users',
            'password' => ['required', 'string', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
            'role' => 'required|string',
            'profile_photo' => 'required|image|mimes:png,jpg,jpeg',
            'interests' => 'required|array',
            'secret_question' => 'required',
            'secret_answer' => 'required',

        ];
        if(request()->role === RoleEnums::MENTOR->value){
            $rules['company'] = 'required|string';
            $rules['job_title'] = 'required|string';
            $rules['website'] = 'sometimes|string';
            $rules['location'] = 'required|string';
            $rules['category'] = 'required|string';
            $rules['bio'] = 'required|string';
            $rules['linkedin'] = 'required|string';
            $rules['twitter'] = 'sometimes|string';
        }
        return $rules;
    }
}
