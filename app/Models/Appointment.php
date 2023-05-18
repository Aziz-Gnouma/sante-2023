<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['name', 'number', 'email', 'date'];

    // Si vous souhaitez utiliser les timestamps (created_at et updated_at)
    // activez la propriété $timestamps en la mettant à true
    // public $timestamps = true;

    // Si vous souhaitez spécifier une table différente pour le modèle Appointment,
    // vous pouvez utiliser la propriété $table
    // protected $table = 'appointments';
}