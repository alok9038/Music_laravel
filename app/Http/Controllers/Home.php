<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\Artist;
use App\Models\Genre;
use App\Models\Album;
use App\Models\Track;

class Home extends Controller
{
    public function index(){
        $data['artists'] = Artist::limit(6)->inRandomOrder()->get();
        $data['tracks'] = Track::limit(7)->orderBy('id','desc')->get();
        $data['eng_track'] = Track::where('genre_id',2)->limit(7)->orderBy('id','asc')->get();
        $data['hindi_track'] = Track::where('genre_id',1)->limit(7)->orderBy('id','asc')->get();
        return view('work.home',$data);
    }
    public function artist($name){
        $encypt_id = $_GET['id'];
        $id =  Crypt::decrypt($encypt_id);
        $data['artist'] = Artist::where('slug',$name)->first();
        
        //$ata = Track::where('multi_artist','LIKE',"%$id%")->orWhere('artist_id',$id)->get();
        // if($ata->multi_artist === null && $ata->artist_id === null ){
        //     $data['songs'] = Track::where('artist_id',$id)->get();
        // }else{
        //     $data['songs'] = Track::where('multi_artist','LIKE',"%$id%")->orWhere('artist_id',$id)->get();
        // }
       //$data['songs'] = Track::where('artist_id',$id)->orWhere('multi_artist','IN',$id)->get();
       //$data['songs'] = Track::where('artist_id',$id)->orWhere(DB::raw("FIND_IN_SET('multi_artist',$id)"))->get();

       $data['songs'] = Track::where('artist_id',$id)->orWhere(DB::raw("CONCAT(',', multi_artist, ',')"), 'LIKE', "%$id%")->get();
        
       //echo $ata;
       //$data['songs'] = DB::table('tracks')->whereRaw("find_in_set($id,'multi_artist)")->get();

        // $data['songs'] = DB::table("track")
        // ->select('*')
        // ->where("FIND_IN_SET($id, multi_artist)", '!=', null)
        // ->get();

        return view('work.artist',$data);
    }
    public function song($id){
        $data['track'] = Track::where('slug',$id)->first();
        $data['songs'] = Track::where('slug','<>',$id)->limit(8)->inRandomOrder()->get();

        // $data['song'] = Track::where('slug','<>',$id)->first();
        // $s2 = $data['song'];

        


        $s = $data['track'];
        

        if(!empty($s->multi_artist)){
            $data['i'] = Track::where('slug',$id)->first();
            $a = explode(",",$data['i']->multi_artist);
            $data['artist'] = Artist:: where(['id'=>$a[1]])->orWhere('id', $a[0])->get();
        }

        // if(!empty($s2->multi_artist)){
        //     $data['i'] = Track::where('slug','<>',$id)->first();
        //     $a = explode(",",$data['i']->multi_artist);
        //     $data['ar'] = Artist:: where(['id'=>$a[1]])->orWhere('id', $a[0])->get();
        // }
        // echo $s2->multi_artist;
        return view('work.song',$data);
    }

    public function search(Request $req){

        $search = $req->search_query;
        //$data['tracks'] = Track::where([['song_title','like',"%$search%"],['artist_id','like',"%$search%"]])->get();
        //$data['artists'] = Artist::where('artist_name','like',"%$search%")->get();

        // $users = DB::table('users')
        //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //     ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('users.*', 'contacts.phone', 'orders.price')
        //     ->get();
        //$search = 'dino';
        $data['tracks'] = Artist::join('tracks','artists.id','=','tracks.artist_id')->where('song_title','like',"%$search%")->orWhere('artist_name','like',"%$search%")->get();
        //$data['artists'] = Artist::join('tracks','artists.id','=','tracks.artist_id')->where('artist_name','like',"%$search%")->get();
        //$data['artists'] = Artist::join('tracks','artists.id','=','tracks.artist_id')->where('song_title','like',"%$search%")->orWhere('artist_name','like',"%$search%")->get();
        //$data['artists'] = Track::join('artists','tracks.artist_id','=','artists.id')->where('artist_name','like',"%$search%")->get();
        $data['artists'] = Artist::where('artist_name','LIKE',"%$search%")->get();
        
        return view('work.search',$data)->with('search', $search);
    }

    public function package($name){
        if($name === 'artist'){
        $data['artists'] = Artist::all();
        return view('work.package',$data)->with('package_name', $name);
        }
        if($name === 'latest-songs'){
        $data['tracks'] = Track::orderBy('id','desc')->get();
        return view('work.package',$data)->with('package_name', $name);
        }
        if($name === 'latest-english'){
        $data['tracks'] = Track::orderBy('id','desc')->where('genre_id',2)->get();
        return view('work.package',$data)->with('package_name', $name);
        }
        if($name === 'latest-hindi'){
        $data['tracks'] = Track::orderBy('id','desc')->where('genre_id',1)->get();
        return view('work.package',$data)->with('package_name', $name);
        }
    }
}
