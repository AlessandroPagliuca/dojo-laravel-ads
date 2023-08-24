<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $table = 'sessions';

    protected $guarded = [];
    // Define the inverse relationship with the announcement
    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }
}