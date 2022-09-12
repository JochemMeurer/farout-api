<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Customer::all();
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        $reservations = DB::table('customers')
            ->join('reservations', 'customers.id', '=', 'customer_id')
            ->join('trips', 'trip_id', '=', 'trips.id')
            ->join('cities', 'city_id', '=', 'cities.id')
            ->join('countries', 'cities.country_code', '=', 'countries.code')
            ->select('trip_id', 'countries.description as country', 'cities.description as city', 'number_of_adults as adults', 'number_of_children as children', 'number_of_days as days', 'paid')
            ->where('customers.id', '=', $id) 
            ->get();

        // return Customer::find($id);
        return response()->json(['customer' => $customer, 'reservation' => $reservations], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
