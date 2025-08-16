<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'email', 'cpf'];
    protected $dates = ['deleted_at'];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}