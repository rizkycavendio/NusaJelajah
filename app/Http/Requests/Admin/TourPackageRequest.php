<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TourPackageRequest extends FormRequest
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
        return [
            'region_id' => 'required',
            'category_id' => 'required',
            'title' => 'required|max:255',
            'description' => 'required',
            'num_people' => 'required|integer',
            'tour_guide' => 'required|boolean',
            'duration' => 'required|max:255',
            'departure_date' => 'required|date',
            'price' => 'required|integer',
            'map_url' => 'required',
            'city' => 'required|max:255',
        ];
    }
}
