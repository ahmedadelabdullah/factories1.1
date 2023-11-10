<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Admin\Customer;
use App\Models\Admin\Invoice;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Invoice::paginate(20);
        return view('admin.pages.invoices.index' , compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        return view('admin.pages.invoices.add',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreInvoiceRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreInvoiceRequest $request)
    {

        $new_invoice = [
            'customer_id' => intval($request->customer_id),
            'date' => $request->date,
            'n_o_models' => $request->n_o_models,
            'invoice_number' => $request->invoice_number,
            'sale_for_one' => $request->sale_for_one,
            'total' => $request->total,
        ];
        $invoice = Invoice::create($new_invoice);
        $invoice_details = [];


//        dd($request->invoice_model[0]['quantity']);
        for ($i = 0 ; $i<count($request->quantity) ; $i++)
        {
            $invoice_details[$i]['quantity'] = $request->quantity[$i];
            $invoice_details[$i]['price'] = $request->price[$i];
            $invoice_details[$i]['description'] = $request->description[$i];
            $invoice_details[$i]['sub_total'] = $request->sub_total[$i];
        }

        $details = $invoice->details()->createMany($invoice_details);

        return redirect()->route('admin.invoices.index');
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
