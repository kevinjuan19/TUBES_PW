@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Booking</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Booking</li>
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
            <a href="{{(route('bookingForm'))}}" class="btn btn-primary">add Booking</a>
        </div>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Pesan</th>
                <th>Harga</th>
                <th>Studio</th>
                <th>Customer</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>
                        {{$booking->id}}
                    </td>
                    <td>
                        {{$booking->tglPesan}}
                    </td>
                    <td>
                        {{$booking->harga}}
                    </td>
                    <td>
                        {{$booking->studio->studio}}
                    </td>
                    <td>
                        {{$booking->customer->nama}}
                    </td>
                    <td>
                        <a href="{{route('bookingEdit',['id'=>$booking->id])}}" class="btn btn-warning" role="button">edit</a>
                        <a href="{{route('bookingDelete', ['id'=>$booking->id])}}" class="btn btn-danger" role="button">delete</a>
                    </td>


                </tr>
            @endforeach
            </tbody>

        </table>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
