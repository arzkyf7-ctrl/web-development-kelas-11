<?php

namespace App\Models;

use Database\Factories\TeachersFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    /** @use HasFactory<TeachersFactory> */
    use HasFactory;
    protected $with = ['subject'];
    protected $fillable=[
        'name', 'niy', 'subject_id', 'start_date'
    ];
    public function subject()
    {
        return $this->belongsTo(Subjects::class);
    }
}
