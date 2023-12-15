<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerSubscription;
use Illuminate\Http\Request;
use Validator;
use Hash;
use MongoDB\BSON\ObjectId;

use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\CustomersOrder;
use App\Models\CustomersAddress;


class CustomerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Customer";
        $customers = Customer::all()->sortByDesc("createdAt");
        $compact = compact('title', 'customers');
        return view('admin.customer.list', $compact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Customer";
        $compact = compact('title');
        return view('admin.customer.create', $compact);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'              => 'required',
            'mobile'            => 'required|numeric|integer|digits:10',
            'email'             => 'required|unique:mongodb.customers_login,email',
            'password'          => 'required',
            'familly_member'    => 'required|min:1|integer',
            'order_limit'       => 'required',
            'gender'            => 'required',
            'dob'               => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->mobile = $request->input('mobile');
        $customer->password = Hash::make($request->input('password'));
        $customer->mobile_verified = false;
        $customer->email = $request->input('email');
        $customer->email_verified = false;
        $customer->wallet_balance = 0;
        $customer->unpaid_balance = 0;
        $customer->familly_member = $request->input('familly_member');
        $customer->order_limit = $request->input('order_limit');
        $customer->gender = $request->input('gender');
        $customer->dob = $request->input('dob');
        $customer->profile_pic = '';
        $customer->save();

        $customer_id = $customer->_id;

        $token = JWTAuth::fromUser($customer);
        $customer->access_token = $token;
        $customer->save();
        return redirect()->back()->with('success', 'Customer Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $title = 'Customer';
        $oid = $customer->_id;
        $orders = CustomersOrder::where('customer_id', '=', new \MongoDB\BSON\ObjectID($oid))->get();
        $subscriptions = CustomerSubscription::where('customer_id', '=', new \MongoDB\BSON\ObjectID($oid))->get();
        $addresses = CustomersAddress::where('customer_id', '=', new \MongoDB\BSON\ObjectID($oid))->get();
        $compact = compact('title', 'customer', 'orders', 'subscriptions', 'addresses');
        return view('admin.customer.view', $compact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
