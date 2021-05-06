<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountMaster extends Model
{
    use HasFactory;

    public function member(){
        return $this->hasOne(Member::class, 'id', 'customer_id');
    }
}
