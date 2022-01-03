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
                    <li class="breadcrumb-item"><a href="{{route('bookingList')}}">Booking</a></li>
					<li class="breadcrumb-item active">Add Booking</li>
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
        <form action="{{(route('bookingSave'))}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">New Booking Date</label>
                <input type="date" id="txtNameId" name="tglPesan" class="form-control" required placeholder="Booking Date">
            </div>
            <div class="form-group">
                <label for="">New Price</label>
                <input type="text" id="txtNameId" name="harga" class="form-control" required placeholder="Price">
            </div>
            <div class="form-group">
                <label for="">New Studio</label>
                <select class="form-control" name="studio_id" id="txtNameId">
                    @foreach($studios as $studio)
                        <option value="{{$studio->id}}">{{$studio->studio}}</option>
                    @endforeach
                </select>
{{--                <input type="text" id="txtNameId" name="studio_id" class="form-control" required placeholder="Studio Id">--}}
            </div>
            <div class="form-group">
                <label for="">New Customer</label>
                <select class="form-control" name="customer_id" id="txtNameId">
                    @foreach($customers as $customer)
                        <option value="{{$customer->id}}">{{$customer->nama}}</option>
                    @endforeach
                </select>
{{--                <input type="text" id="txtNameId" name="customer_id" class="form-control" required placeholder="Customer Id">--}}
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
