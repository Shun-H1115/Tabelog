<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodTag extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function reviews() {
        return $this->belongsTo(Review::class);
    }
}