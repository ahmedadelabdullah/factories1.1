<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [

        'invoice_number', 'date', 'customer_id', 'n_o_models', 'sale_for_one', 'total',
    ];

    public function details(){
        return $this->hasMany(InvoiceDetails::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

}
