<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\RequestErrorMessage;

class ProductCreateRequest extends FormRequest
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
            'price_sell' => 'bail|required|numeric|integer|min:0|max_digits:20|max:18446744073709551615',
            'stock' => 'bail|required|numeric|integer|min:0|max_digits:10|max:4294967295',
            'description' => 'bail|required|string|max:65535',
            'image' => 'bail|required|file|max:10000',
            'code' => 'bail|required|string|max:100',
            'name' => 'bail|required|string|max:100',
            'unit' => 'bail|required|string|max:100',

            'category_id' => 'bail|required|string|exists:product_categories,id',
            'company_id' => 'bail|required|string|exists:companies,id',
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
            'description' => 'Deskripsi',
            'price_sell' => 'Harga jual',
            'image' => 'Gambar',
            'stock' => 'Stok',
            'code' => 'Kode',
            'name' => 'Nama',
            'unit' => 'Unit',

            'company_id' => 'Perusahaan',
            'category_id' => 'Kategori',
        ];
    }
}
