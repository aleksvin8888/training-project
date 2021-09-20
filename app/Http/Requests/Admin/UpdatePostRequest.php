<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'content' => [
                'required',
                'string',
            ],
            'category_id' => [
                'required',
                'integer',
                'exists:categories,id',
            ],
            'main_image' => [
                'nullable',
                'file',
                'mimes:jpeg,png,jpg,svg',
                'max:30000000'
            ],
            'preview_image' => [
                'nullable',
                'file',
                'mimes:jpeg,png,jpg,svg',
                'max:30000000'
            ],
            'tag_ids' => [
                'nullable',
                'array'
            ],
            'tag_ids.*' => [
                'nullable',
                'exists:tags,id',
                'integer'
            ]

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле обезательно для заполнения',
            'title.string' => 'Поле должно соответствовать строчному типу',
            'title.max:255' => 'Максимальное количество символоа 255',
            'content.required' => 'Поле обезательно для заполнения',
            'content.string' => 'Поле должно соответствовать строчному типу',
            'category_id.required' => 'Поле обезательно для заполнения',
            'category_id.integer' => 'Значения должно быть числовым',
            'category_id.exists' => 'Выбраная категория должна быть в  базе',
            'main_image.mimes' => 'Формат файла должен быть jpeg png jpg svg ',
            'preview_image.mimes' => 'Формат файла должен быть jpeg png jpg svg ',
            'main_image.file' => 'Должен бить фаил',
            'preview_image.file' => 'Должен бить фаил',
            'preview_image.max:30000000' => 'Привышен максимальный  розмер файла 30 MB',
            'main_image.max:30000000' => 'Привышен максимальный  розмер файла 30 MB',
            'tag_ids.array' => 'Входяще значения должнобыть масивом',


        ];
    }
}