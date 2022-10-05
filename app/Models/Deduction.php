<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongsTo(DeductionType::class,'deduction_type_id');
    }
}
