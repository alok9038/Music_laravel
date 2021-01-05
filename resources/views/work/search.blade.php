@extends('layouts.base')
@section('content')
    
    
    <div class="container" style="margin-top: 110px;">
        <h3 class="text-white">Search results for "{{ $search }}"</h3>
        <div class="row mt-5">
            @if($tracks->count())
            <div class="head mb-4 text-white d-flex"><h4>Songs</h4> <a href="" class="mt-1 ms-auto text-decoration-none text-white">view all</a></div>
            @foreach ($tracks as $t)
            <div class="" style="width: 14.28%;">
                <a href="{{ route('home.song',['track'=>$t->slug]) }}" title="{{ $t->song_title }}" class="text-decoration-none">
                    <div class="card border-0 bg-transparent">
                        <div class="card-img-top rounded" style="height: 150px;">
                            <img src="{{ asset('public/track_cover/'.$t->track_cover) }}" alt="" class="img-fluid image rounded w-100 h-100" style="">
                            <div class="middle">
                                <div class="text " style="height:40px; width:40px; border-radius:50%;"><i class="fas fa-play"></i></div>
                            </div>
                        </div>
                        <div class="card-body bg-none p-0">
                            <h6 class="text-white text-truncate">{{ $t->song_title }}</h6>
                            <p class="small text-muted" style="margin-top: -7px;">{{ $t->artist_name }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @endif
        </div>
    </div>
   
    @if ($artists->count())
    
        
    <div class="container mt-5">
        <div class="head text-white mb-5 h4">Artist</div>
        <div class="row">
            @foreach ($artists as $artist) 
            <div class="col-lg-2">
                <div class="card bg-transparent border-0">
                    <div class="card-img-top rounded-circle w-100" style="height: 165px;">
                        <a href="{{ route('artist',[ 'name' => $artist->slug,'id' => Crypt::encrypt($artist->id)]) }}" class="text-white text-decoration-none">
                        <img src="{{ asset('public/artist_cover/'.$artist->artist_cover) }}" alt="" class="img-fluid rounded-circle w-100 h-100" style=" object-fit:cover;">
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="text-center text-white"><a href="{{ route('home.artist',['artist'=>$artist->slug]) }}" class="text-white text-decoration-none">{{ $artist->artist_name }}</a> </h6>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
   

    @endif
@endsection