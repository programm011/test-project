<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class RoleRequest extends FormRequest
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
     * @return array
     */
    public function validationData(): array
    {
        return array_merge($this->all(), ['name' => Str::slug($this->input('name'))]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $rules['title']         = 'required|string|max:255';
        $rules['name']          = 'required|unique:roles,name';
        $rules['permissions']   = 'array';
        $rules['permissions.*'] = 'exists:permissions,id';

        if ($this->route()->getName() == 'roles.update') {
            $rules['name'] = 'required|unique:roles,name,' . $this->route('role')->id;
        }

        return $rules;
    }
}
