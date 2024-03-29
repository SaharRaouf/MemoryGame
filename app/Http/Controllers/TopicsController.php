<?php namespace App\Http\Controllers;

use App\Topic;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TopicsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$topics = Topic::all()->sortByDesc('updated_at');

        return view('topics.index', compact('topics'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('topics.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $this->validate($request, [
            'name' => 'required|unique:topics',
            'title' => 'required|unique:topics',
            'base_topic_id' => 'required'
        ]);

        $topic = Topic::create($request->all());

        \Session::flash('success', $topic->name . ' topic is successfully created.');

       // return redirect('admin/topics');
        return redirect()->back();
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

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

        $topic = Topic::findOrFail($id);

		return view('topics.edit', compact('topic'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'base_topic_id' => 'required'
        ]);

        $topic = Topic::findOrFail($id);

        $topic->update($request->all());

        \Session::flash('success', $topic->name . ' topic is successfully updated.');

        return redirect('admin/topics');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Topic::destroy($id);

        \Session::flash('success', 'Topic is deleted.');

        return redirect('admin/topics');
	}

}
