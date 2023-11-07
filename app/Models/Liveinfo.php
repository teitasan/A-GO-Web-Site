<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liveinfo extends Model
{
    protected $table = 'Liveinfo';
    protected $guarded = ['id'];
    use HasFactory;
    public $timestamps = false;

}