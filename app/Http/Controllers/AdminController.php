<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Artist;
use App\Models\Track;
use App\Models\Album;
use Auth;



class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.index');
    }
    
    public function song(){
        $data['artist'] = Artist::all();
        $data['genre'] = Genre::all();
        $data['album'] = Album::all();
        $data['tracks'] = Track::orderBy('id', 'desc')->get();
        return view('admin.insert',$data);
    }
    public function songStore(Request $request){
        $request->validate([
            'song_title' => 'required',
            'artist' => 'required',
            'audio_track' => 'required|mimes:audio/mpeg,mpga,mp3,wav',
            'cover' => 'required',
            'genre' => 'required',
        ]);

        
        $filename = time() . "." . $request->cover->extension();
        $request->cover->move(public_path("track_cover"),$filename);

        $slug = Str::of($request->song_title)->slug('-');
        
        $audio = time()."_".$slug. "." . $request->audio_track->extension();
        $request->audio_track->move(public_path("audio_file"),$audio);
        
        $array = $request->artist;
        $artist = implode(",",$array);

        $song = new Track();
        $song->song_title = $request->song_title;
        $song->artist_id = $request->artist[0];
        if(!empty($request->artist[1])){
            $song->multi_artist = $artist;
        }
        $song->album_id = $request->album;
        $song->genre_id = $request->genre;
        $song->track_file = $audio;
        $song->track_cover = $filename;
        $song->slug = $slug;
        $song->save();

        return redirect()->back();
    }

    public function genreInsert(Request $request){
        $request->validate([
            'g_title'       => 'required',
            'description'   => 'required'
        ]);
        $g = new Genre();
        $g->g_title = $request->g_title;
        $g->description = $request->description;
        $g->save();
        return redirect()->back();

    }
    public function genre(){
        $data['genres'] = Genre::all();
        return view('admin.genre',$data); 
    }

    public function artistStore(Request $request){
        $request->validate([
            'artist_name'       => 'required',
            'description'   => 'required',
            'artist_cover'   => 'required',
            'occupation'   => 'required'
        ]);

        $filename = time() . "." . $request->artist_cover->extension();
        $request->artist_cover->move(public_path("artist_cover"),$filename);

        $slug = Str::of($request->artist_name)->slug('-');
        $g = new Artist();
        $g->artist_name = $request->artist_name;
        $g->description = $request->description;
        $g->artist_cover = $filename;
        $g->occupation = $request->occupation;
        $g->slug = $slug;
        $g->save();
        return redirect()->back();

    }
    public function artist(){
        $data['artists'] = Artist::all();
        return view('admin.artist',$data);
    }
    public function album_store(Request $req){
        $req->validate([
            'title' => 'required',
            'r_date' => 'required',
            'genre' => 'required',
            'cover' => 'required'
        ]);

            $filename = time() . "." . $req->cover->extension();
            $req->cover->move(public_path("album_cover"),$filename);

            $album = new Album();
            $album->album_title = $req->title;
            $album->r_date = $req->r_date;
            $album->genre = $req->genre;
            $album->album_cover = $filename;
            $album->save();

            return redirect()->back();
    }
    // public function albumStore(Resquest $request){
    //     $request->validate([
    //         'album_title' => 'required',
    //         'r_date' => 'required',
    //         'genre' => 'required',
    //         'album_cover' => 'required'
    //     ]);

    //     // $filename = time() . "." . $request->album_cover->extension();
    //     // $request->album_cover->move(public_path("album_cover"),$filename);

    //     // $album = new Album();
    //     // $album->album_title = $request->album_title;
    //     // $album->r_date = $request->r_date;
    //     // $album->genre = $request->genre;
    //     // $album->album_cover = $filename;
    //     // $album->save();

    //     return redirect()->back();
    // }

    public function album(){
        $data['genre'] = Genre::all(); 
        $data['album'] = Album::all(); 
        return view('admin.album',$data);
    }
}
