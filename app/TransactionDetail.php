<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'transactions_id', 'username', 'no_hp', 'is_passport'
    ];

    protected $hidden = [];


    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }
}
