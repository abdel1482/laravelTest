<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    use HasFactory;

    protected $fillable = [
      'call_date',
      'duration',
      'subject'
    ];

    public function client()
    {
      return $this->belongsTo(Client::class);
    }

    public function phoneNumber()
    {
      return $this->belongsTo(PhoneNumber::class);
    }
}
