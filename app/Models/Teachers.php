<?php

namespace App\Models;

use Database\Factories\TeachersFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    /** @use HasFactory<TeachersFactory> */
    use HasFactory;

    public function subject()
    {
        return $this->belongsTo(Subjects::class);
    }
}
