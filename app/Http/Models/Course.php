<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $fillable = ['name', 'level', 'hours', 'teacher_id'];

    public function students() : BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }

    public function teacher():BelongsTo
    {
        return  $this->belongsTo(Teacher::class);
    }
}
