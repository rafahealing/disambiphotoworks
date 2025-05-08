<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dengan nama model
    protected $table = 'bookings'; 

    // Tentukan kolom yang boleh diisi (mass assignable)
    protected $fillable = [
        'user_id', 'tanggal', 'jam', 'paket', 'harga', 'request_custom'
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}

}
