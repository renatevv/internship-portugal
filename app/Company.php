<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'owner', 'phone_number'];

    public function users()
    {
        return $this->hasMany(User::class);
    }   
}