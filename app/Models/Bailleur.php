<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bailleur extends Model
{
    use HasFactory;
    protected $table = 'bailleurs';
    protected $primaryKey = 'id';
    protected $fillable = ['bailleur','codeprojet'];
}
