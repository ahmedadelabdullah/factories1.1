<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mdl extends Model
{
    use HasFactory;

    protected $fillable  = ['description',
'price',
'materials',
'accessories',
'colors',
'image',];
}
