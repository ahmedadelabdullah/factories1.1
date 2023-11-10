<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone', 'address', 'initial_balance_status', 'initial_balance', 'current_balance', 'active', 'added_by',
    ];

    public function invoices(){
        return $this->hasMany(Invoice::class , 'invoice_id' , 'id');
    }
}
