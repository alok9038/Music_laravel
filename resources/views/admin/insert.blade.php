@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 90px;">
        <div class="row">
            <div class="col-lg-5">
                <div class="card border-0 shadow bg-dark">
                    <div class="card-header border-0 text-light">Insert Song</div>
                    <div class="card-body">
                        <form action="{{ route('admin.song.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="text-light">Title</label>
                                <input type="text" name="song_title" class="form-control rounded-0">
                                @error('song_title')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-light">Artist</label>
                                <select name="artist[]" id="" class="form-control rounded-0" multiple>
                                    <option value="" selected disabled hidden>Select Artist</option>
                                    @foreach ($artist as $a)
                                        <option value="{{ $a->id }}">{{ $a->artist_name }}</option>
                                    @endforeach
                                </select>
                                @error('artist')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-light">Album</label>
                                <select name="album" id="" class="form-control rounded-0">
                                    <option value="" selected disabled hidden>Select Album</option>
                                    @foreach ($album as $a)
                                        <option value="{{ $a->album_id }}">{{ $a->album_title }}</option>
                                    @endforeach
                                </select>
                                @error('album')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-white">Genre</label>
                                <select name="genre" id="" class="form-control rounded-0">
                                    <option value="" selected disabled hidden>Select Genre</option>
                                    @foreach ($genre as $g)
                                        <option value="{{ $g->id }}">{{ $g->g_title }}</option>
                                    @endforeach
                                </select>
                                @error('genre')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-light">Audio <span class="text-muted">( .mp3 )</span></label>
                                <input type="file" name="audio_track"  class="form-control rounded-0 w-100">
                                @error('audio_track')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-light">Cover</label>
                                <input type="file" name="cover"  class="form-control rounded-0 w-100">
                                @error('cover')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Add" class="btn btn-info rounded-0 w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                @foreach ($tracks as $t)
                <div class="card mb-4 border-0 shadow bg-dark" style="border-radius:66px;">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class=" rounded-circle w-100" style="height: 140px;">
                                    <img src="{{ asset('public/track_cover/'.$t->track_cover) }}" alt="" class="img-fluid rounded-circle w-100 h-100" style=" object-fit:cover;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-1">
                                    <h4 class="text-light">{{ $t->song_title }}</h4>
                                    <p class="small text-muted">{{ $t->artist->artist_name }}</p>
                                    <audio  controls class="my_audio" preload="none">
                                        <source src="{{ url('public/audio_file/'.$t->track_file) }}" type="audio/mpeg">
                                    </audio>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="action mt-5 d-flex mx-auto pt-2" style="width: 70px;">
                                    <div class="rounded-circle bg-white w-100 px-2 pt-1" style="height: 30px; width:40px;"><a href="" class="text-danger "><i class="fas fa-trash"></i></a></div>

                                    <div class="rounded-circle bg-white w-100 px-1 ms-3 pt-1" style="height: 30px; width:40px;"><a href="" class="text-primary "><i class="fas fa-edit ms-1"></i></a></div>
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
        $(".my_audio").trigger('load');
    </script>

@endsection