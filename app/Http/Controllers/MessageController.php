<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\MessageRequest;
use App\Http\Controllers\Controller;
use App\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Tag;

/**
 * Class MessageController
 * @package App\Http\Controllers
 */
class MessageController extends Controller {

    public function __construct(){
        $this->middleware('auth',['only'=>'create']);
    }
	/**
	 * Show all messages.
	 *
	 * @return Response
	 */
	public function index()
	{
    $messages=Message::latest()->get();

        return view('messages.index',compact('messages'));
	}


    /**
     * Show a single message
     * Show the form for editing the specified resource.
     *
     * @param  Message $messages
     * @return Response
     * using model route binding "fetching articles don't needed:)"
     */
    public function show(Message $messages){
       dd($messages->body);
        return view('messages.show',compact('messages'));

    }

    /**
     * fetch the tags
     * sends over tags to the view
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $tags=Tag::lists('name','id');

        return view('messages.create',compact('tags'));
    }

    /*
     * Save a new message
     * if it's goes throw the validation
     * send all to the database
     * @return
     * */
    public function store(MessageRequest $request){

        $this->createMessage($request);
        flash()->overlay('Your message has been send!','Now!');

        return redirect('message');
    }
public function edit($id){
    $tags=Tag::lists('name','id');
    $messages=Message::findOrFail($id);

    //return view('messages.edit')->with('messages',$messages);
    return view('messages.edit',compact('messages','tags'));
}
public function update(Message $messages,MessageRequest $request){


    //$messages=Message::findOrFail($id);

    $messages->update($request->all());
    if($request->input('tag_list') == null){
        $tag_list = [];
    }
    else {
        $tag_list = $request->input('tag_list');
    }

    $this->syncTags($messages, $tag_list);

   // $this->syncTags($messages,$request->input('tag_list'));
    return redirect('message');

}
    private function syncTags(Message $message,array $tags){
        $message->tags()->sync((array)$tags);
    }
    Private function createMessage(MessageRequest $request){
        $messages = new Message($request->all());
        Auth::user()->message()->save($messages);
        $this->syncTags($messages,$request->input('tag_list'));
        return $messages;
    }
}
