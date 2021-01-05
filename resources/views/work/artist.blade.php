@extends('layouts.base')
@section('content')
    <div class="header" style="background-image: url({{ asset('public/artist_cover/'.$artist->artist_cover) }}); background-size:cover;background-position:center; background-attachment:fixed; height:550px; margin-top:-59px;">
        <div class="overlay h-100" style="background-color: rgba(0, 0, 0, 0.623); transition: background-color 0.5s cubic-bezier(0.4, 0, 0.2, 1);">
            <div class="container text-white" style="padding-top:290px;">
                <div class="row">
                    <div class="col-lg-6 ">
                        <h2>{{ $artist->artist_name }}</h2>
                        <p class="small text-light">
                            {{ substr($artist->description,0,129) }}<span id="dots">...</span><span id="more" style="display: none;"> {{ substr($artist->description,129,-1) }}</span><br>
                            <a onclick="myFunction()" id="myBtn" class="text-light text-decoration-underline" style="cursor: pointer;">Read more</a>
                        </p>
                        <div class="buttons">
                            <a href="" class="btn btn-light px-5 rounded-0">SHUFFLE</a>
                            <a href="" class="btn btn-outline-danger px-5 rounded-0">SUBSCRIBE 8.7M</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <h4 class="text-white">{{ $artist->artist_name }} Songs</h4>
        <div class="row mt-4">
            @foreach ($songs as $s)
            <div class="col-lg-2">
                <a href="{{ route('home.song',['track'=>$s->slug]) }}" title="{{ route('home.song',['track'=>$s->slug]) }}" class="text-decoration-none">
                    <div class="card border-0 bg-transparent">
                        <div class="card-img-top rounded" style="height: 150px;">
                            <img src="{{ asset('public/track_cover/'.$s->track_cover) }}" alt="" class="img-fluid image rounded w-100 h-100">
                            <div class="middle">
                                <div class="text " style="height:40px; width:40px; border-radius:50%;"><i class="fas fa-play"></i></div>
                            </div>
                        </div>
                        <div class="card-body bg-none p-0">
                            <h6 class="text-white">{{ $s->song_title }}<h6>
                            <p class="small text-muted" style="margin-top: -7px;">{{ $s->artist->artist_name }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    

<script>
    function myFunction() {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");

          var btnText = document.getElementById("myBtn");
            
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
</script>
@endsection