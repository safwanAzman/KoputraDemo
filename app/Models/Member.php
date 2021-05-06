<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table='customers';

    public function account_master(){
        return $this->hasMany(AccountMaster::class, 'customer_id', 'id');
    }
}
