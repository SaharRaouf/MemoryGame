<?php namespace App\Http\Controllers;
use App\BaseTopic;
use App\Topic;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {

        $baseTopics = BaseTopic::where('is_published', '=', true)->get();

        $user = \Auth::user();

        return view('home')->with([
            'baseTopics' => $baseTopics,
            'user' => $user
        ]);

    }
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response

	public function index()
	{
		return view('home');
	}


*/
    public function about(){
        return view('project.about');
    }
    public function contact(){
        return view('project.contact');
    }
}