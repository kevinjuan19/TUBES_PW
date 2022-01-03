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
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Studio</li>
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
            <a href="{{(route('studioForm'))}}" class="btn btn-primary">add Studio</a>
        </div>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Studio</th>
                <th>Film_id</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($studios as $studio)
                <tr>
                    <td>
                        {{$studio->id}}
                    </td>
                    <td>

                        {{$studio->studio}}
                    </td>
                    <td>

                        {{$studio->film->judul}}
                    </td>
                    <td>
                        <a href="{{route('studioEdit',['id'=>$studio->id])}}" class="btn btn-warning" role="button">edit</a>
                        <a href="{{route('studioDelete', ['id'=>$studio->id])}}" class="btn btn-danger" role="button">delete</a>
                    </td>


                </tr>
            @endforeach
            </tbody>

        </table>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
