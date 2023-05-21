<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

    use HasFactory;

    
}
$answer = new Answer();
$answer->subject = $request->input('subject');
$answer->message = $request->input('message');
$answer->save();

