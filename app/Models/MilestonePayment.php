<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MilestonePayment extends Model
{
    use SoftDeletes;

    public function client()
    {
        return $this->belongsTo(User::class, 'client_user_id');
    }

    public function expert()
    {
        return $this->belongsTo(User::class, 'expert_user_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
