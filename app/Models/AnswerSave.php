<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerSave extends Model
{
    use HasFactory;
    protected $fillable = [
        'question_id',
        'answer_name',
    ];
}
