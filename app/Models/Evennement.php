<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evennement extends Model
{

    use HasFactory;
    protected $fillable = ['Nom_Evenement','description','date','Nom_club','Email'];


}