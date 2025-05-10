<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStockRequest extends FormRequest
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
            'quantite_stock' => 'required|integer|min:1',
            'lieu_stock' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'quantite_stock.required' => 'La quantité doit être saisie',
            'quantite_stock.min' => 'La quantité doit être supérieure à 0',
            'quantite_stock.integer' => 'La quantité doit être un nombre entier',
            'lieu_stock.required' => 'Le lieu de stockage est obligatoire',
            'lieu_stock.max' => 'Le lieu de stockage ne doit pas dépasser 255 caractères',
        ];
    }
}
