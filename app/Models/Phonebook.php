<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phonebook extends Model
{
    protected $table = 'phonebook';
    public $timestamps = false;
    protected $fillable = ['fio', 'phone'];

}
