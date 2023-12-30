<?php

namespace App\Http\Requests;

use App\Http\Enums\RoleEnums;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UpdateUserRequest extends FormRequest
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
        $user = auth()->user()->id;
        $rules = [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => ['required', 'string', 'email', Rule::unique('users')->ignore($user),],
            'username' => ['required', 'string', Rule::unique('users')->ignore($user),],
            'phone_number' => ['required', 'string', Rule::unique('users')->ignore($user),],
            'password' => ['nullable', 'string', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
        ];
        if(request()->role === RoleEnums::MENTOR->value){
            $rules['company'] = 'required|string';
            $rules['job_title'] = 'required|string';
            $rules['country_id'] = 'required|string';
            $rules['bio'] = 'required|string';
            $rules['linkedin'] = 'required|string';
            $rules['twitter'] = 'sometimes|string';
            $rules['interests'] = 'required|array';
        }
        return $rules;
    }
}
