@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 90px;">
        <div class="row">
            <div class="col-lg-4">
                <div class="card border-0 shadow bg-dark">
                    <div class="card-header border-0 text-light">Insert Genre</div>
                    <div class="card-body">
                        <form action="{{ route('admin.genre.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="text-light">Genre (Category) Name</label>
                                <input type="text" name="g_title" class="form-control rounded-0">
                                @error('g_title')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-light">Description</label>
                                <textarea rows="5" name="description" class="form-control rounded-0"></textarea>
                                @error('description')
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
            <div class="col-lg-8">
                <div class="card border-0 shadow bg-dark">
                    <div class="card-body">
                        <table class="table table-md table-borderless text-light ">
                            <tr class="table-light">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($genres as $genre)
                                <tr>
                                    <td>{{ $genre->id }}</td>
                                    <td>{{ $genre->g_title }}</td>
                                    <td>{{ $genre->description }}</td>
                                    <td><a href="" class="btn btn-primary rounded-0"><i class="fas fa-edit"></i></a>
                                        <a href="" class="btn btn-danger rounded-0"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection