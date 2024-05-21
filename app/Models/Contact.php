<?php
// app/Models/Contact.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'messages'; // Tablo adınızı belirtin
    protected $primaryKey = 'id'; // İhtiyaç duyarsanız anahtar sütununuzu belirtin
    public $timestamps = true; // Varsayılan olarak zaman damgalarını kullanmak istiyorsanız true olarak bırakın

    protected $fillable = ['name', 'email', 'message', 'created_at']; // Doldurulabilir alanları belirtin

    // İhtiyaç duyarsanız diğer özellikleri de belirtebilirsiniz
}
