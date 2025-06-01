@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Gallery</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>  
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('gallery.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="travel_packages_id">Travel Package</label>
                    <select class="form-control" name="travel_packages_id">
                        <option value="{{ $item->travel_packages_id }}">{{ $item->travelPackage->title }}</option>
                        @foreach ($travel_packages as $travel_package)
                            {{ $travel_package->id == $item->travel_packages_id ? 'selected' : '' }}>
                            {{ $travel_package->title }}
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" placeholder="Image" required>
                </div>
                <button type="submit" class="btn btn-block" style="background-color: #253839; color: white;">
                    Save
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection