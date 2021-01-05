@extends('layouts.admin')
@section('content')
    <div class="container " style="margin-top: 90px;">
        <div class="row">
            <div class="col-lg-5">
                <div class="card border-0 shadow bg-dark">
                    <div class="card-header border-0 text-light">Insert Album</div>
                    <div class="card-body">
                        <form action="{{ route('admin.album.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="text-white">Album Title</label>
                                <input type="text" name="title" class="form-control rounded-0">
                                @error('title')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-white">Release Date</label>
                                <input type="date" name="r_date" class="form-control rounded-0">
                                @error('r_date')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-white">Genre</label>
                                <input type="text" name="genre" class="form-control rounded-0">
                                @error('genre')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-white">Cover</label>
                                <input type="file" name="cover" class="form-control rounded-0">
                                @error('cover')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="add" class="btn btn-info rounded-0">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                @foreach ($album as $a)
                <div class="card mb-4 border-0 shadow bg-dark" style="border-radius:66px;">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class=" rounded-circle w-100" style="height: 140px;">
                                    <img src="{{ asset('public/album_cover/'.$a->album_cover) }}" alt="" class="img-fluid rounded-circle w-100 h-100" style=" object-fit:cover;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-3">
                                    <h4 class="text-light">{{ $a->album_title }}</h4>
                                    <p class="small text-muted">Anne Marie</p>
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
    
@endsection