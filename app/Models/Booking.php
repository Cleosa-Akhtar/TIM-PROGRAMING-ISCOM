<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Properti fillable wajib diisi agar fungsi penambahan data (Create) dan pencarian berjalan
    protected $fillable = ['nama', 'npm', 'no_hp', 'tanggal', 'jam', 'catatan', 'status'];
}