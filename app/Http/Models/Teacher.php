<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    use HasFactory;

    protected  $table = 'teachers';

    protected $fillable = ['full_name', 'profession', 'grade', 'phone'];

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }


}
