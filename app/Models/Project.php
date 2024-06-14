<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'url',
        'name',
        'student_id',
        'description',
        'table_count',
        'language'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
}
