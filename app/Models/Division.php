<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Division extends Model
{
    use HasFactory;

    protected $fillable = [
        'division_name'
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
