<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackagePayment extends Model
{
    use SoftDeletes;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class)->withTrashed();
    }

    public function scopeExpert($query)
    {
        return $query->where('package_type', 'expert');
    }

    public function scopeClient($query)
    {
        return $query->where('package_type', 'client');
    }
}
