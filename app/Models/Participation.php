<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    use HasFactory;
    protected $table = 'participations';
    protected $primaryKey = 'id';
    protected $fillable = ['code_projet','code_user'];
}
