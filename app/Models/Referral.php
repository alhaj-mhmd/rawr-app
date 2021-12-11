<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tier()
    {
        return $this->belongsTo(Tier::class);
    }

    public function referrer()
    {
        return $this->belongsTo(User::class,'referrer_id');
    }
}
