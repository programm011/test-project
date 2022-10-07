<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $rules['login']     = 'required|string|unique:users,login';
        $rules['password']  = 'required|string';
        $rules['role_id']   = 'required|exists:roles,id';
        $rules['is_active'] = 'required|boolean';

        if ($this->route()->getName() == 'users.update') {
            $rules['login']    = 'required|string|unique:users,login,' . $this->route('user')->id;
            $rules['password'] = 'nullable';
        }

        return $rules;
    }
}
