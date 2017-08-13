<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomersController extends Controller
{
    public function index()
    {
      $customers = Customer::all();
      return view('customers.index', compact('customers'));
    }
    public function show(Customer $customer)
    {
      return view("customers.show", compact('customer'));
    }
}
