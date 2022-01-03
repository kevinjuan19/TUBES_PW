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
                    <li class="breadcrumb-item"><a href="{{route('customerList')}}">Customer</a></li>
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
        <form action="{{route('customerUpdate', ['id' => $customer->id])}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Customer Id</label>
                <input type="text" id="txtNameId" name="id" class="form-control" required placeholder="Customer Id" readonly value="{{$customer->id}}">
            </div>
            <div class="form-group">
                <label for="">Customer Name</label>
                <input type="text" id="txtNameId" name="nama" class="form-control" required placeholder="Customer Name" value="{{$customer->nama}}">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" id="txtNameId" name="alamat" class="form-control" required placeholder="Address" value="{{$customer->alamat}}">
            </div>
            <div class="form-group">
                <label for="">Phone Number</label>
                <input type="text" id="txtNameId" name="noTelp" class="form-control" required placeholder="Phone Number" value="{{$customer->noTelp}}">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" id="txtNameId" name="email" class="form-control" required placeholder="Email" value="{{$customer->email}}">
            </div>



            <button type="submit" class="btn btn-primary">Save</button>
        </form>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
