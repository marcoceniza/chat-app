<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConversationUsers extends Model
{
    protected $fillable = [
        'conversation_id',
        'user_id',
    ];
}
