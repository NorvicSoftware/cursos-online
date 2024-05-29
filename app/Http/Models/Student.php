<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $fillable = ['code', 'full_name', 'age', 'phone', 'address'];


    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }

}
