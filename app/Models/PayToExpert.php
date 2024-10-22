<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PayToExpert extends Model
{
    use SoftDeletes;
    public function admin()
    {
        return $this->belongsTo(User::class, 'paid_by');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
