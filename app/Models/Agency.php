<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agency extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function cars() : HasMany{
        return $this->hasMany(Car::class);
    }

    public function user() : BelongsTo{
        return $this->belongsTo(User::class);
    }
}
