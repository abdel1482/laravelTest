<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  use HasFactory;

  protected $fillable = [
    'first_name',
    'last_name',
    'email',
    'city'
  ];

    public function phoneNumbers()
    {
      return $this->hasMany(PhoneNumber::class);
    }

    public function call()
    {
      return $this->hasMany(Call::class);
    }
}
