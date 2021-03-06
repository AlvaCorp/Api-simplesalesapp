<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use DB;

class CustomerController extends Controller
{

    public function index()
    {
        $customer = DB::table('customers')->orderBy('cust_id')->get()->all();
        return $customer;
    }

   
    public function store(CustomerRequest $request)
    {

        $response = [];

        $phone = Customer::where('phone', $request->phone)->first();
        $email = Customer::where('email', $request->email)->first();

        if ( !is_null($phone) || !is_null($email) ) {
            if (!is_null($phone)) {
                $response['phone'] = 'Nomer yang anda masukkan sudah terdaftar';
            }

            if (!is_null($email)) {
                $response['email'] = 'Email yang anda masukkan sudah terdaftar';
            }
        
            return response()->json(['msg' => $response],406);
        }

        
        $customer = Customer::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email
        ]);

        $response = [
            'msg' => 'Create data Success',
            'data' => $customer
        ];

        return response()->json($response, 201);
    }


    public function show(Customer $customer)
    {
        return $customer;
    }

   

    public function update(CustomerRequest $request, Customer $customer)
    {
        
        $response = [];

        $phone = Customer::where('phone', $request->phone)->first();
        $email = Customer::where('email', $request->email)->first();

        if ( !is_null($phone) || !is_null($email) ) {
            if (!is_null($phone)) {
                $response['phone'] = 'Nomer yang anda masukkan sudah terdaftar';
            }

            if (!is_null($email)) {
                $response['email'] = 'Email yang anda masukkan sudah terdaftar';
            }
        
            return response()->json(['msg' => $response],406);
        }
        
        $customer->name=$request->name;
        $customer->phone=$request->phone;
        $customer->email=$request->email;
        $customer->save();

        $response = [
            'msg' => 'Update Success',
            'data' => $customer
        ];

        return response()->json($response,200);
    }


    public function destroy(Customer $customer)
    {
        $customer->delete();
        return ['msg' => 'Data has been deleted'];
    }
}
