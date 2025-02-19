<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Refund;

class Method extends Model
{
    use HasFactory;

    protected $fillable = [
        'method_name'
    ];

    public function refunds()
    {
        return $this->hasMany(Refund::class);
    }
}
