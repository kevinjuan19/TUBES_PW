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
					<li class="breadcrumb-item active">Edit Booking</li>
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
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Booking Id</label>
                <input type="text" id="txtNameId" name="id" class="form-control" required placeholder="Genre Id" readonly value="{{$booking->id}}">
            </div>
            <div class="form-group">
                <label for="">Booking Date</label>
                <input type="date" id="txtNameId" name="tglPesan" class="form-control" required placeholder="Genre Name" value="{{$booking->tglPesan}}">
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="text" id="txtNameId" name="harga" class="form-control" required placeholder="Genre Name" value="{{$booking->harga}}">
            </div>
            <div class="form-group">
                <label for="">Studio Id</label>
                <select class="form-control" name="studio_id" id="txtNameId">
                    <option value="{{$booking->studio->id}}">{{$booking->studio->studio}}</option>
                    @foreach($studios as $studio)
                        <option value="{{$studio->id}}">{{$studio->studio}}</option>
                    @endforeach
                </select>
{{--                <input type="text" id="txtNameId" name="studio_id" class="form-control" required placeholder="Genre Name" value="{{$booking->studio_id}}">--}}
            </div>
            <div class="form-group">
                <label for="">Customer Id</label>
                <select class="form-control" name="customer_id" id="txtNameId">
                    <option value="{{$booking->customer->id}}">{{$booking->customer->nama}}</option>
                    @foreach($customers as $customer)
                        <option value="{{$customer->id}}">{{$customer->nama}}</option>
                    @endforeach
                </select>
{{--                <input type="text" id="txtNameId" name="customer_id" class="form-control" required placeholder="Genre Name" value="{{$booking->customer_id}}">--}}
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
