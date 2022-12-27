<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ProfessionalType extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'professional_type_id', 'id');
    }
}
