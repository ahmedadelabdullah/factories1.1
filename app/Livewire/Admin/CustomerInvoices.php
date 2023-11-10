<?php

namespace App\Livewire\Admin;

use App\Models\Admin\Customer;
use App\Models\Admin\Invoice;
use App\Models\Admin\InvoiceDetails;
use App\Models\Admin\Mdl;
use Livewire\Component;

class CustomerInvoices extends Component
{
public $price = [];
public $quantity = 1;
public $sub_total = "";
public $models = [];
public $invoice_models = [];
public $index;
    public $inputs = [
        ["price" => "" , "quantity" => "",  "sub_total" => ""]
    ];
//    public function updated($key){
//
//
//    }

    public function count($key){
//        dd($key);
//        $this->index[1] = explode(".",$key);
        array_push($this->inputs, [
            "price" => "",
            "quantity" => "",
        ]);
        $this->inputs[$key]['sub_total'] = (int) $this->inputs[$key]['quantity'] * (int) $this->inputs[$key]['price'];
    }

    public function mount()
    {
        $this->models = Mdl::all();
        $this-> invoice_models= [
            ['quantity' =>'24' , 'price' => '' , 'description' => '' , 'sub_total' => "" , 'delete' => '']
        ];

    }


    public function addModel(){
//dd($this->invoice_models);
        $this->invoice_models[] =
            ['quantity' => '' , 'price' => '' , 'description' => '' , 'sub_total' => '' , 'delete' => ''];
    }
        public function deleteModel($index)
        {
//            dd($this->invoice_models[$index]['price']);
            unset($this->invoice_models[$index]);
            array_values($this->invoice_models);
        }

    public function render()
    {
        info($this->invoice_models);
        $customers = Customer::all();
        return view('livewire.admin.customer-invoices' , ['customers' => $customers]);
    }
}
