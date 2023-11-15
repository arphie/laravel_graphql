<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phonebook extends Model
{
    use HasFactory;

    protected $table = 'phonebook';

    protected $fillable = [
        'name',
        'contact_no',
    ];
}
