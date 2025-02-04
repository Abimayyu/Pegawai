<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'nip',
        'position',
        'departement',
        'salary',
        'join_date',
        'created_at',
        'updated_at',

    ];
}
