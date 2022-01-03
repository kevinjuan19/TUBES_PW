@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Genre</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('genreList')}}">Genre</a></li>
					<li class="breadcrumb-item active">Edit Genre</li>
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
        <form action="{{route('genreUpdate', ['id' => $genre->id])}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Genre Id</label>
                <input type="text" id="txtNameId" name="id" class="form-control" required placeholder="Genre Id" readonly value="{{$genre->id}}">
            </div>
            <div class="form-group">
                <label for="">Genre Name</label>
                <input type="text" id="txtNameId" name="nama" class="form-control" required placeholder="Genre Name" value="{{$genre->nama}}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
