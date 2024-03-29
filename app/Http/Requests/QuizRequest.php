<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class QuizRequest extends Request {

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
            'quiz_name'=>'required|min:3',
            'choice1'=>'required|min:3',
            'answer'=>'required|min:3',
		];
	}

}
