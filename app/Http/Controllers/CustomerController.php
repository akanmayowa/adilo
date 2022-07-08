<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
            return view('customer');
    }


    public function fetchCustomerData()
    {
        $customer = Customer::paginate(10)->toArray();
        return response()->json($customer);  
    }
}
