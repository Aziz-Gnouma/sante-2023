<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Appointment extends Model
{
    protected $fillable = ['name', 'number', 'email', 'date'];

    public function getAnswers(): HasOne
     {
        return $this->hasOne(Answer::class);
    }
}
