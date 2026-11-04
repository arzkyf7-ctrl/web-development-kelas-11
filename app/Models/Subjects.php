<?php

namespace App\Models;

use Database\Factories\SubjectsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    /** @use HasFactory<SubjectsFactory> */
    use HasFactory;

    public function teacher()
    {
        return $this->belongsTo(Teachers::class);
    }
}
