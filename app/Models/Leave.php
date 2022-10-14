<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongsTo(LeaveType::class,'leave_type_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
