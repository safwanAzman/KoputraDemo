<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function invoice(){
        return $this->belongsTo('App\Models\Invoice', 'invoice_id' , 'id');
    }

    public function bank(){
        return $this->belongsTo('App\Models\Bank', 'bank_id' , 'id');
    }
}
