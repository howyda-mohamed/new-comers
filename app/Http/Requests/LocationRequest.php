<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationRequest extends FormRequest
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
            'image' => 'required|mimes:jpg,jpeg,png',
            'title' => 'required|max:255',
            'sub_title'=>'required|max:255',
            'location' =>'required',
            'phone'=>'required|max:50',
            'email'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'required'=>'this field is required',
            'title.max'=>'Title must be smaller than 255',
            'sub_title.max'=>'Title must be smaller than 255',
            'phone.max'=>'Phone must be smaller than 50',
        ];
    }
}
