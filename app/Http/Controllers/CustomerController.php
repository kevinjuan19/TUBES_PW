<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Customer::all();
        //include_once - nama folder di view akan mengambil index di folder faculty
        return view('customer.index', [
            'customers' => $data
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
        return view('customer.create');
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
        $data = validator($request->all(), [
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'noTelp' => 'required|string|max:100',
            'email' => 'required|string|max:100'
        ])->validate();
        $customer = new Customer($data);
        $customer->save();
        return redirect(route('customerList'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
        return view('customer.edit', [
            'customer' => $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
        $data = validator($request->all(), [
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'noTelp' => 'required|string|max:100',
            'email' => 'required|string|max:100'
        ])->validate();
        $customer->nama = $data['nama'];
        $customer->alamat = $data['alamat'];
        $customer->noTelp = $data['noTelp'];
        $customer->email = $data['email'];
        $customer->save();
        return redirect(route('customerList'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
        $customer->delete();
        return redirect(route('customerList'));
    }
}
