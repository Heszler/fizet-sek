<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'szabadsagok';
    protected $primaryKey = 'id';

    protected $fillable = ['kiveheto', 'kivett'];
    

    use HasFactory;
}
