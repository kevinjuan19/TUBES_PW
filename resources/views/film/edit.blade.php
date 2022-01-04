@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Film</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('filmList')}}">Film</a></li>
					<li class="breadcrumb-item active">Edit Film</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

		{{-- main content here --}}
        <form action="{{route('filmUpdate', ['id' => $film->id])}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Film Id</label>
                <input type="text" id="txtNameId" name="id" class="form-control" required placeholder="Film Id" readonly value="{{$film->id}}">
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" id="txtNameId" name="judul" class="form-control" required placeholder="Title" value="{{$film->judul}}">
            </div>
            <div class="form-group">
                <label for="">Director</label>
                <input type="text" id="txtNameId" name="sutradara" class="form-control" required placeholder="Director" value="{{$film->sutradara}}">
            </div>
            <div class="form-group">
                <label for="">Duration</label>
                <input type="text" id="txtNameId" name="durasi" class="form-control" required placeholder="Duration" value="{{$film->durasi}}">
            </div>
            <div class="form-group">
                <label for="">Genre</label>
                <select class="form-control" name="genre_id" id="txtNameId">
                    <option value="{{$film->genre->id}}">{{$film->genre->nama}}</option>
                    @foreach($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->nama}}</option>
                    @endforeach
                </select>
{{--                <input type="text" id="txtNameId" name="genre_id" class="form-control" required placeholder="Genre_id" value="{{$film->genre->id}}">--}}
            </div>
            <label for="">Poster</label>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-3">
                            @if($film->poster == null)
                                <img src="../../uploads/default.jpg" class="img-thumbnail">

                            @else
                                <img src="../../uploads/{{$film->poster}}" class='img-thumbnail'>
                            @endif

                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name='poster' accept="image/png, image/jpeg" >
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
