<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     * authorize フォームリクエストの利用が許可されているかどうか
     * trueなら許可、falseなら例外が発生してフォーム処理が行えない。
     * フォームリクエストでバリデーションを行う場合、true（許可）に変える。
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * 条件を記述
     */
    public function rules()
    {
        return [
            'name' => 'required | max:20',
            'profile' => 'max:100'
            //
        ];
    }
}
