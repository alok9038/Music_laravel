@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 90px;">
        <div class="row">
            <div class="col-lg-5">
                <div class="card border-0 shadow bg-dark">
                    <div class="card-header border-0 text-light">Insert Artist</div>
                    <div class="card-body">
                        <form action="{{ route('admin.artist.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="text-light">Name</label>
                                <input type="text" name="artist_name" class="form-control rounded-0" value="{{ old('artist_name') }}">
                                @error('artist_name')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-light">Description</label>
                                <textarea rows="8" name="description" class="form-control rounded-0">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-light">Occupation</label>
                                <input type="text" name="occupation" class="form-control rounded-0" value="{{ old('occupation') }}">
                                @error('occupation')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-light">Cover</label>
                                <input type="file" name="artist_cover"  class="form-control rounded-0 w-100">
                                @error('artist_cover')
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
                @foreach ($artists as $artist)
                <div class="card mb-4 border-0 shadow bg-dark" style="border-radius:66px;">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class=" rounded-circle w-100" style="height: 140px;">
                                    <img src="{{ asset('public/artist_cover/'.$artist->artist_cover) }}" alt="" class="img-fluid rounded-circle w-100 h-100" style=" object-fit:cover; object-position:center;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-1">
                                    <h4 class="text-light">{{ $artist->artist_name }}</h4>
                                    <p class="small text-muted">
                                        {{ substr($artist->description,0,129) }}<span id="dots{{ $artist->id }}">...</span><span id="more{{ $artist->id }}" style="display: none;"> {{ substr($artist->description,129,-1) }}</span><br>
                                        <a onclick="myFunction{{ $artist->id }}()" id="myBtn{{ $artist->id }}" class="text-light text-decoration-none" style="cursor: pointer;">Read more</a>
                                    </p>
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
        <?php foreach($artists as $artist): ?>
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
        <?php endforeach; ?>
    </script>
@endsection