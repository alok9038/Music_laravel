@extends('layouts.base')
@section('content')
<div class="overlay1" style=" background-image: url({{ asset('public/track_cover/'.$track->track_cover) }});">
</div>
    <div class="container-fluid content-song ">
        <div class="container  pb-5 mt-5">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card border-0 bg-transparent shadow" style="height:230px; border-radius:25px;">
                        <div class="card-body p-0">
                            <img src="{{ asset('public/track_cover/'.$track->track_cover) }}" class="img-fluid h-100 w-100" alt="" style="object-fit: cover;border-radius:25px;">
                        </div>
                    </div>
                    <div class="head h4 text-white mt-5">Artist</div>
                    <?php if(!empty($track->multi_artist)): ?>
                        @foreach ($artist as $a)
                        <a href="{{ route('artist',[ 'name' => $a->slug,'id' => Crypt::encrypt($a->id)]) }}" class="text-decoration-none">
                            <div class="d-flex mt-4">
                                <div class="" style="width: 40%;"><img src="{{ asset('public/artist_cover/'.$a->artist_cover) }}" class="img-fluid rounded-circle w-100" style="object-fit: cover; height:100px;" alt=""></div>
                                <h5 class="text-white mt-4 ms-3">{{ $a->artist_name }} <br><span class="small text-light text-capitalize" style="font-size: 11px!important;">{{ $a->occupation }}</span></h5>
                            </div>
                        </a>
                        @endforeach
                    <?php else: ?>
                    <a href="{{ route('artist',[ 'name' => $track->artist->slug,'id' => Crypt::encrypt($track->artist->id)]) }}" class="text-decoration-none">
                        <div class="d-flex mt-4">
                            <div class="" style="width: 40%;"><img src="{{ asset('public/artist_cover/'.$track->artist->artist_cover) }}" class="img-fluid rounded-circle w-100" style="object-fit: cover; height:100px;" alt=""></div>
                            <h5 class="text-white mt-4 ms-3">{{ $track->artist->artist_name }} <br><span class="small text-light" style="font-size: 13px!important;">{{ $track->artist->occupation }}</span></h5>
                        </div>
                    </a>
                    <?php endif; ?>
                </div>
                <div class="col-lg-7">
                    <h5 class="text-white h2">{{ $track->song_title }} </h5>
                    <p class="small text-light">
                        @if ($track->multi_artist === null)
                            {{ $track->artist->artist_name }} - {{ $track->artist->occupation }}
                        @else
                            @foreach ($artist as $a)
                                {{ $a->artist_name }},
                            @endforeach
                        @endif
                    </p>
                    <div class="buttons d-flex">
                        <form action="" method="get">
                            <button type="submit" name="play" value="1" class="btn btn-danger"style="border-radius: 25px;"><i class="fas fa-play"></i> Play now</button>
                        </form>
                        <a href="{{ asset('public/audio_file/'.$track->track_file) }}" class="btn btn-outline-light ms-3" style="border-radius: 25px;"><i class="fas fa-download"></i> Download</a>
                        <a href="" class="btn btn-outline-light ms-3" style="border-radius: 50%;"><i class="far fa-heart"></i></a>
                    </div>
                    
                    <div class="box mt-5">
                        <div class="head h4 text-white">Similar Songs</div>
                        <div class="row mt-4">
                            @foreach ($songs as $s)
                            <div class="col-lg-3">
                                <a href="{{ route('home.song',['track'=>$s->slug]) }}" class="text-decoration-none">
                                    <div class="card border-0 bg-transparent">
                                        <div class="card-img-top rounded" style="height: 150px;">
                                            <img src="{{ asset('public/track_cover/'.$s->track_cover) }}" alt="" class="img-fluid image rounded w-100 h-100">
                                            <div class="middle">
                                                <div class="text " style="height:40px; width:40px; border-radius:50%;"><i class="fas fa-play"></i></div>
                                            </div>
                                        </div>
                                        <div class="card-body bg-none p-0">
                                            <h6 class="text-white text-truncate">{{ $s->song_title }}</h6>
                                            <p class="small text-light" style="margin-top: -7px;">
                                            {{-- @if (empty($track->multi_artist))
                                            @foreach ($ar as $a)
                                                    {{ $a->artist_name }},
                                                @endforeach
                                                
                                            @else
                                            {{ $s->artist->artist_name }}
                                            @endif</p> --}}
                                            {{ $s->artist->artist_name }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @isset($_GET['play'])
    <footer class="footer">
        <div class="container p-0 pb-2" style="border-radius:8px; background-color:#21252d; opacity:.95;">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="audio-player">
                            <div class="timeline" style="border-radius:8px 8px 0 0;">
                                <div class="progress"></div>
                            </div>
                        <div class="controls">
                            <div class="d-flex w-25 p-0 mt-2">
                                <div class="" style="width: 30%;"><img src="{{ asset('public/track_cover/'.$track->track_cover) }}" class="img-fluid w-100" style="object-fit: cover; height:70px; border-radius:15px;" alt=""></div>
                                <h5 class="text-white mt-2 ms-3 h6">{{ $track->song_title }} <br><span class="small text-muted">singer</span></h5>
                            </div>
                            <div class="play-container">
                                <i class="fas fa-play toggle-play play"></i>
                            </div>
                            <div class="time">
                                <div class="current">0:00</div>
                                <div class="divider">/</div>
                                <div class="length"></div>
                            </div>
                            <div class="volume-container">
                                <div class="volume-button">
                                <div class="volume fas fa-volume-up fa-2x"></div>
                                </div>
                                
                                <div class="volume-slider">
                                <div class="volume-percentage"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
      @endisset 
@php
    $data = asset('public/audio_file/'.$track->track_file);
@endphp
    <script>
                // Possible improvements:
                    // - Change timeline and volume slider into input sliders, reskinned
                    // - Change into Vue or React component
                    // - Be able to grab a custom title instead of "Music Song"
                    // - Hover over sliders to see preview of timestamp/volume change

            const audioPlayer = document.querySelector(".audio-player");
            const audio = new Audio(
            "{{ $data }}"
            );
            //credit for song: Adrian kreativaweb@gmail.com

            console.dir(audio);

            audio.addEventListener(
            "loadeddata",
            () => {
                audioPlayer.querySelector(".time .length").textContent = getTimeCodeFromNum(
                audio.duration
                );
                audio.volume = .75;
            },
            false
            );

            //click on timeline to skip around
            const timeline = audioPlayer.querySelector(".timeline");
            timeline.addEventListener("click", e => {
            const timelineWidth = window.getComputedStyle(timeline).width;
            const timeToSeek = e.offsetX / parseInt(timelineWidth) * audio.duration;
            audio.currentTime = timeToSeek;
            }, false);

            //click volume slider to change volume
            const volumeSlider = audioPlayer.querySelector(".controls .volume-slider");
            volumeSlider.addEventListener('click', e => {
            const sliderWidth = window.getComputedStyle(volumeSlider).width;
            const newVolume = e.offsetX / parseInt(sliderWidth);
            audio.volume = newVolume;
            audioPlayer.querySelector(".controls .volume-percentage").style.width = newVolume * 100 + '%';
            }, false)

            //check audio percentage and update time accordingly
            setInterval(() => {
            const progressBar = audioPlayer.querySelector(".progress");
            progressBar.style.width = audio.currentTime / audio.duration * 100 + "%";
            audioPlayer.querySelector(".time .current").textContent = getTimeCodeFromNum(
                audio.currentTime
            );
            }, 500);

            //toggle between playing and pausing on button click
            const playBtn = audioPlayer.querySelector(".controls .toggle-play");
            playBtn.addEventListener(
            "click",
            () => {
                if (audio.paused) {
                playBtn.classList.remove("play");
                playBtn.classList.add("pause");
                audio.play();
                } else {
                playBtn.classList.remove("pause");
                playBtn.classList.add("play");
                audio.pause();
                }
            },
            false
            );

            audioPlayer.querySelector(".volume-button").addEventListener("click", () => {
            const volumeEl = audioPlayer.querySelector(".volume-container .volume");
            audio.muted = !audio.muted;
            if (audio.muted) {
                volumeEl.classList.remove("icono-volumeMedium");
                volumeEl.classList.add("icono-volumeMute");
            } else {
                volumeEl.classList.add("fa-volume-up");
                volumeEl.classList.remove("icono-volumeMute");
            }
            });

            //turn 128 seconds into 2:08
            function getTimeCodeFromNum(num) {
            let seconds = parseInt(num);
            let minutes = parseInt(seconds / 60);
            seconds -= minutes * 60;
            const hours = parseInt(minutes / 60);
            minutes -= hours * 60;

            if (hours === 0) return `${minutes}:${String(seconds % 60).padStart(2, 0)}`;
            return `${String(hours).padStart(2, 0)}:${minutes}:${String(
                seconds % 60
            ).padStart(2, 0)}`;
            }

    </script>
@endsection
