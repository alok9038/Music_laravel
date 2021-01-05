@extends('layouts.base')
@section('content')
{{-- for artist view all --}}
    @if ($package_name === 'artist')
    <div class="container" style="margin-top: 110px;">
        <div class="row">
            <div class="col-lg-8">
                @foreach ($artists as $artist)
                <div class="card mb-4 border-0 shadow bg-dark" style="border-radius:79px;">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class=" rounded-circle w-100" style="height: 160px;">
                                    <img src="{{ asset('public/artist_cover/'.$artist->artist_cover) }}" alt="" class="img-fluid rounded-circle w-100 h-100" style=" object-fit:cover; object-position:center;">
                                </div>
                            </div>
                            <div class="col-lg-7 ms-2">
                                <div class="mt-1">
                                    <h4 class="text-light"><a href="{{ route('artist',[ 'name' => $artist->slug,'id' => Crypt::encrypt($artist->id)]) }}" class="text-decoration-none text-white">{{ $artist->artist_name }}</a></h4>
                                    <p class="small text-danger text-capitalize">{{ $artist->occupation }}</p>
                                    <p class="small text-muted">
                                        {{ substr($artist->description,0,123) }}<span id="dots{{ $artist->id }}">...</span><span id="more{{ $artist->id }}" style="display: none;"> {{ substr($artist->description,123,-1) }}</span><br>
                                        <a onclick="myFunction{{ $artist->id }}()" id="myBtn{{ $artist->id }}" class="text-light text-decoration-none" style="cursor: pointer;">Read more</a>
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>   
    <script>
         @foreach($artists as $artist)
        function myFunction{{ $artist->id }}() {
        var dots = document.getElementById("dots{{ $artist->id }}");
        var moreText = document.getElementById("more{{ $artist->id }}");

        var btnText = document.getElementById("myBtn{{ $artist->id }}");
            
        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
        }
        }
        @endforeach
    </script>
    @endif
{{-- for artist view all end --}}
@if ($package_name === 'latest-songs' || $package_name === 'latest-english' || $package_name === 'latest-hindi')
    <div class="container" style="margin-top: 110px;">
        <div class="row">
            <div class="head mb-4 text-white d-flex">
                <h4>
                    @if ($package_name === 'latest-songs')
                        Latest Songs
                    @elseif ($package_name === 'latest-english')
                        Latest English
                    @elseif ($package_name === 'latest-hindi')
                        Latest Hindi
                    @endif
                </h4>
            </div>
            @foreach ($tracks as $t)
            <div class="mb-4" style="width: 14.28%;">
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
                            <p class="small text-muted" style="margin-top: -7px;">{{ $t->artist->artist_name }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endif
    






@endsection