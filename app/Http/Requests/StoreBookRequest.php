<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|unique:books,title',
            'year' => 'required|integer',
            'authors' => 'required',
            'status' => 'boolean|nullable',
        ];
    }

    public function validationData()
	{
		$this->merge([
			'status' => (bool) $this->input('status'),
		]);

		return parent::validationData();
	}
}
