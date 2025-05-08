<?php

// app/Exports/BookingExport.php
namespace App\Exports;

use App\Models\Booking;
use Maatwebsite\Excel\Concerns\FromCollection;

class BookingExport implements FromCollection
{
    public function collection()
    {
        return Booking::all();
    }
}

