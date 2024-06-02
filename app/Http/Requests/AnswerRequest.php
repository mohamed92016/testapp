<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest
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
            'question_id'=>'required',

            'description'=>'required|min:5',
            'is_correct'=>'required',
            
        ];
    }

    public function messages(): array
    {
        return [
            'description.required'=>'وصف الاختيار مطلوب',
            'description.min'=>'يجب الا بقل الاختيار عن خمسة احرف',
            'is_correct.required'=>'من فضلك حدد الاختيار الصحيح',
            'question_id.required'=>'من فضلك اختر السؤال'
        ];
    }
}
