<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;


class BookStoreRequest extends FormRequest
{
    public function rules()

    {

        return [

            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'publishDate' => 'required',
            'pages' => 'required|numeric',

        ];

    }



    public function failedValidation(Validator $validator)

    {

        throw new HttpResponseException(response()->json([

            'success'   => false,

            'message'   => 'Validation errors',

            'data'      => $validator->errors()

        ]));

    }



    public function messages()

    {

        return [

            'title.required' => 'Title is required',

            'author.required' => 'Author is required',

            'publishDate.requred' => 'Date is required',

            'pages.required' => 'Pages is required'

        ];

    }

}
