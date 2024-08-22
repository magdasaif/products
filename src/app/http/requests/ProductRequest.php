<?php
namespace Magdasaif\Products\app\http\requests; 

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'image' => 'required|image|mimes:jpeg,png,gif|max:2048',
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'image' => 'الصورة'
        ];
    }
}
