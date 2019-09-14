<?php namespace App\Http\Controllers;

use App\Http\Requests\InquiryRequest;
use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Input;

class InquiryController extends Controller {
    public function __construct(){
        $this->middleware('auth',['only'=>'create']);
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('project.inquiry');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('project.inquiry');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(InquiryRequest $request)
	{
        $this->createInquiry($request);
        session()->flash('flash_message', 'Tack för dit svar!');
        return redirect('home');
	}
    Private function createInquiry(InquiryRequest $request){


        $input=[ 'gender'=>$request->input('gender'),
            'birth_date'=>$request->input('birth_date'),
            'answer1'=>$request->input('answer1'),
            'answer2'=>$request->input('answer2'),
            'answer3'=>$request->input('answer3'),
            'answer4'=>$request->input('answer4'),
            'answer5'=>$request->input('answer5'),
            'answer6'=>$request->input('answer6'),
            'observation'=>$request->input('observation')
        ];
        $inquiries = new Inquiry($request->all());
        Auth::user()->inquiry()->save($inquiries);
        return $inquiries;
    }
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}



}
