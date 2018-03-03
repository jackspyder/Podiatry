<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReferralFormRequest extends FormRequest
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
            'ref_name' => 'required|max: 255',
            'ref_title' => 'required',
            'ref_profession' => 'required',
            'work_address' => 'required|max: 510',
            'pat_name' => 'required|max: 255',
            'pat_title' => 'required',
            'pat_address' => 'required|max: 510',
            'pat_number' => 'required|numeric',
            'pat_email' => 'email|required',
            'reason' => 'required'
        ];
    }
}
