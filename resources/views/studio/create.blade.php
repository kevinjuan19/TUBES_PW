@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Studio</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('studioList')}}">Studio</a></li>
					<li class="breadcrumb-item active">Add Studio</li>
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
        <form action="{{(route('studioSave'))}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">New Studio Name</label>
                <input type="text" id="txtNameId" name="studio" class="form-control" required placeholder="Studio Name">
            </div>
            <div class="form-group">
                <label for="">New Film Id</label>
                <select class="form-control" name="film_id" id="txtNameId">
                    @foreach($films as $film)
                        <option value="{{$film->id}}">{{$film->judul}}</option>
                    @endforeach
                </select>
{{--                <input type="text" id="txtNameId" name="film_id" class="form-control" required placeholder="Film Id">--}}
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
