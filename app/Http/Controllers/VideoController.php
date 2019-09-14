<?php namespace App\Http\Controllers;

use App\Video;
use App\VideoAlbum;
class VideoController extends Controller {


    /**
     * Show all videos.
     *
     * @return Response
     */
    public function show()
    {
        $videos=Video::all();

        return view('video.view_video')
            ->with('title', 'Videos')
            ->with('videos', $videos);
    }

}
