@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Customer</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Customer</li>
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
            <a href="{{(route('customerForm'))}}" class="btn btn-primary">add customer</a>
        </div>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>nama</th>
                <th>alamat</th>
                <th>noTelp</th>
                <th>email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>
                        {{$customer->id}}
                    </td>
                    <td>

                        {{$customer->nama}}
                    </td>
                    <td>

                        {{$customer->alamat}}
                    </td>
                    <td>

                        {{$customer->noTelp}}
                    </td>
                    <td>

                        {{$customer->email}}
                    </td>
                    <td>
                        <a href="{{route('customerEdit',['id'=>$customer->id])}}" class="btn btn-warning" role="button">edit</a>
                        <a href="{{route('customerDelete', ['id'=>$customer->id])}}" class="btn btn-danger" role="button">delete</a>
                    </td>


                </tr>
            @endforeach
            </tbody>

        </table>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
