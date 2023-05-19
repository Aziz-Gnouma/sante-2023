<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = ['Nom_Evenement','description','date','Nom_club','Email'];

    public function Users()
{
    return $this->belongsToMany(User::class, 'participants','interresants');
}
public function user()
{
    return $this->belongsTo(User::class);
}
}