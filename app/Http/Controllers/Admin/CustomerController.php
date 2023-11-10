<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Admin\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::paginate(30);
        return view('admin.pages.customers.index' , compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        $customers = Customer::paginate();
        return view('admin.pages.customers.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        $new_customer = [
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'initial_balance_status' => $request->initial_balance_status,
                'initial_balance' => $request->initial_balance,
                'current_balance' => $request->current_balance,
                'active' => $request->active
        ];
        Customer::create($new_customer);
        return redirect()->route('admin.customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($customer)
    {
        $customer_show = Customer::findOrFail($customer);
        return view('admin.pages.customers.show' , ['customer_show' => $customer_show]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($customer)
    {
        $customer_edit = Customer::findOrFail($customer);
        return view('admin.pages.customers.edit' , ['customer_edit' => $customer_edit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, $customer)
    {
        $update_customer = Customer::findOrFail($customer);
        $update_customer->update([
        'name' => $request->name,
        'phone' => $request->phone,
        'address' => $request->address,
        'initial_balance_status' => $request->initial_balance_status,
        'initial_balance' => $request->initial_balance,
        'current_balance' => $request->current_balance,
        'active' => $request->active
    ]) ;
        $customers = Customer::paginate(30);
        return redirect()->route('admin.customers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($customer)
    {
        $deleted_customer = Customer::findOrFail($customer);
        $deleted_customer->delete();
        $customers = Customer::paginate(30);
        return redirect()->route('admin.customers.index');
    }
}
