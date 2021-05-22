<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlowerCreateValidation extends FormRequest
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
            'flower_name' => ['required'],
            'flower_type' => ['required'],
            'flower_color' => ['required']
        ];
    }

    public function messages(){
            return [
                'flower_name.required' => 'FLower name is required .',
                'flower_type.required' =>  'Flower type is required .',
                'flower_color.required' =>  'Flower color is required .'
            ];
            
    }
}
