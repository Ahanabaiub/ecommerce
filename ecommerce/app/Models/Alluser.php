<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Alluser extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function customer()
     {
         return $this->belongsTo(Customer::class);
     }

}
