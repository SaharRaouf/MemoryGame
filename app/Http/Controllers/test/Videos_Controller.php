<?php namespace App\Http\Controllers;

class Videos_Controller extends Controller
{
public $restful = true;

public function get_index()
{
$videos = DB::table('videos')->get();
return views::make('test.index')
->with('title', 'Videos')
->with('videos', $videos);
}
}