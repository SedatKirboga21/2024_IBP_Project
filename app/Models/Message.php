<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['sender_name', 'sender_email', 'message', 'read_status'];
    public static function getUserMessages($userId) {
        return Message::where('user_id', $userId)->get();
    }
}
