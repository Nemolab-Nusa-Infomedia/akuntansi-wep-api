<?php

namespace App\Http\Requests\CashflowType;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\RequestErrorMessage;

class CashflowTypeCreateRequest extends FormRequest
{
    use RequestErrorMessage;

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
            'name' => 'bail|required|string|max:100',
            'type' => 'bail|required|string|max:100',
        ];
    }

    /**
     * Aliases name
     * 
     * @return array
     */
    public function attributes(): array
    {
        return [
            'name' => 'Nama',
            'type' => 'Tipe',
        ];
    }
}
