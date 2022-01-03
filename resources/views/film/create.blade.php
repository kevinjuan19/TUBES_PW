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
					<li class="breadcrumb-item active">Add Film</li>
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
        <form action="{{(route('filmSave'))}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">New Title Name</label>
                <input type="text" id="txtNameId" name="judul" class="form-control" required placeholder="Title Name">
            </div>
            <div class="form-group">
                <label for="">New Director</label>
                <input type="text" id="txtNameId" name="sutradara" class="form-control" required placeholder="Director">
            </div>
            <div class="form-group">
                <label for="">New Duration</label>
                <input type="text" id="txtNameId" name="durasi" class="form-control" required placeholder="Duration">
            </div>
            <div class="form-group">
                <label for="">New Genre</label>
                <select class="form-control" name="genre_id" id="txtNameId">
                    @foreach($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->nama}}</option>
                    @endforeach
                </select>
{{--                <input type="text" id="txtNameId" name="genre_id" class="form-control" required placeholder="Genre id">--}}
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
