<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'sender_id',
        'group_id',
        'receiver_id',
    ];

    public function sender()
    {
        return $this->belongsToMany(User::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsToMany(User::class, 'receiver_id');
    }

    public function group()
    {
        return $this->belongsToMany(Group::class);
    }
    public function attachments()
    {
        return $this->hasMany(MessageAttachment::class);
    }
}
