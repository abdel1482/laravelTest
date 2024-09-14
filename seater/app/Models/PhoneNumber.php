<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    use HasFactory;

  protected $fillable = [
    'phone_number'
  ];

    public function client()
    {
      return $this->belongsTo(Client::class);
    }

    public function call()
    {
      return $this->hasMany(Call::class);
    }
}
