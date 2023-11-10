<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetails extends Model
{
    use HasFactory;
protected $fillable = [
    'invoice_id',
'quantity',
'price',
'description',
'sub_total',
];
    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }
}
