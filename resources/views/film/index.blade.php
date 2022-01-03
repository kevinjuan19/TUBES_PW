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
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Film</li>
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
        <div class="card-header">
            <a href="{{(route('filmForm'))}}" class="btn btn-primary">add film</a>
        </div>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Sutradara</th>
                <th>Durasi</th>
                <th>Genre</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($films as $film)
                <tr>
                    <td>
                        {{$film->id}}
                    </td>
                    <td>

                        {{$film->judul}}
                    </td>
                    <td>

                        {{$film->sutradara}}
                    </td>
                    <td>

                        {{$film->durasi}}
                    </td>
                    <td>

                        {{$film->genre->nama}}
                    </td>
                    <td>
                        <a href="{{route('filmEdit',['id'=>$film->id])}}" class="btn btn-warning" role="button">edit</a>
                        <a href="{{route('filmDelete', ['id'=>$film->id])}}" class="btn btn-danger" role="button">delete</a>
                    </td>


                </tr>
            @endforeach
            </tbody>

        </table>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
