<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $table = 'projets';
    protected $primaryKey = 'id';
    protected $fillable = ['designation','budget','localisation','secteur','datedebut','datefin','created_by'];
}
