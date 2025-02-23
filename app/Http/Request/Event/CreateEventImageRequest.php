<?php

namespace HiEvents\Http\Request\Event;

use HiEvents\DomainObjects\Enums\EventImageType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateEventImageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'image' => [
                'required',
                'image',
                'max:8192', //8mb
                'dimensions:max_width=5760,max_height=3844',
                'mimes:jpeg,png,jpg,webp',
            ],
            'type' => Rule::in(EventImageType::valuesArray()),
        ];
    }

    public function messages(): array
    {
        return [
            'image.required' => 'Gambar harus diunggah.',
            'image.image' => 'File harus berupa gambar.',
            'image.dimensions' => 'Gambar harus memiliki ukuran tepat 1200x600 piksel.',
            'image.max' => 'Ukuran file tidak boleh lebih dari 8MB.',
            'image.mimes' => 'Format gambar harus jpeg, png, jpg, atau webp.',
        ];
    }
}
