<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class InquiryRequest extends Request {

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
            'gender' =>'required',
            'birth_date'=>'required',
            'answer1'=>'required',
            'answer2'=>'required',
            'answer3'=>'required',
            'answer4'=>'required',
            'answer5'=>'required',
            'answer6'=>'required'
		];
	}

}
