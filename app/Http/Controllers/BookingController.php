<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Customer;
use App\Studio;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Booking::all();
        //include_once - nama folder di view akan mengambil index di folder faculty
        return view('booking.index', [
            'bookings' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //menambahkan data
        $data = Studio::all();
        $data2 = Customer::all();
        return view('booking.create',[
            'studios' => $data,
            'customers' => $data2
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //
        $data = validator($request->all(), [
            'tglPesan' => 'required|string|max:100',
            'harga' => 'required|string|max:100',
            'studio_id' => 'required|string|max:100',
            'customer_id' => 'required|string|max:100'
        ])->validate();
        $booking = new Booking($data);
        $booking->save();
        return redirect(route('bookingList'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {

        $data = Studio::all();
        $data2 = Customer::all();
        return view('booking.edit', [
            'booking' => $booking,
            'studios' => $data,
            'customers' => $data2
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
        $data = validator($request->all(), [
            'tglPesan' => 'required|string|max:100',
            'harga' => 'required|string|max:100',
            'studio_id' => 'required|string|max:100',
            'customer_id' => 'required|string|max:100'
        ])->validate();
        $booking->tglPesan = $data['tglPesan'];
        $booking->harga = $data['harga'];
        $booking->studio_id = $data['studio_id'];
        $booking->customer_id = $data['customer_id'];
        $booking->save();
        return redirect(route('bookingList'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
        $booking->delete();
        return redirect(route('bookingList'));
    }
}
