<?php

namespace App\Http\Controllers;

use App\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validate the data
        $this->validate($request, array(
                'email'         => 'required|email|max:255',
                'f_name'        => 'required|min:5',
                'l_name'        => 'required',
                'zip_code'      => 'required',
                'country'       => 'required',
                'state'         => 'required',
                'phone'         => 'required',
                'mobile_number' => 'required'

            ));

        $tests = json_decode($request->all_cart_product_details);
        return view('paypal')->withTests($tests);
        $checkout = new Checkout();
        $checkout->details = $request->all_cart_product_details;
        $checkout->company_name = $request->company_name;
        $checkout->email = $request->email;
        $checkout->title = $request->title;
        $checkout->first_name = $request->f_name;
        $checkout->middle_name = $request->m_name;
        $checkout->last_name = $request->l_name;
        $checkout->address_1 = $request->address_1;
        $checkout->address_2 = $request->address_2;
        $checkout->zip_code = $request->zip_code;
        $checkout->country = $request->country;
        $checkout->state = $request->state;
        $checkout->phone = $request->phone;
        $checkout->mobile_phone = $request->mobile_number;
        $checkout->fax = $request->fax;
        $checkout->notes = $request->notes;
        $checkout->shipping_to_bill_address = $request->shipping_to_bill_address;
        $checkout->cart_total_price = $request->cart_sub_total;
        $checkout->exo_tax = $request->eco_tax;
        $checkout->shipping_cost = $request->cart_sub_total_tax;
        $checkout->total_charge = $request->cart_sub_total_with_tax;
        $checkout->payment_method = $request->payment_method;
        $checkout->status = $request->status;
        $checkout->shipping_cost = $request->shipping_cost;
        $checkout->save();
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
