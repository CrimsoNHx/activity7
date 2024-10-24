<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'cover', 'content', 'kit_id'
    ];

    public function kit() {
        return $this->belongsTo(Kit::class);
    }
}
