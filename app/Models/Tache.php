<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    protected $table = 'taches';
    protected $primaryKey = 'id';
    protected $fillable = ['designation','montant','datedebut','datefin','codeprojet','created_by'];
}
