<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectBid extends Model
{
    use SoftDeletes;
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function expert()
    {
        return $this->belongsTo(User::class, 'bid_by_user_id');
    }
}
