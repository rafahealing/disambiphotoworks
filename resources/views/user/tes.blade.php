<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function showBookingForm()
    {
        $user = Auth::user();
        $bookedDates = Booking::pluck('tanggal')->toArray();

        return view('user.booking', compact('bookedDates', 'user'));
    }

    public function showReceipt()
    {
        $user = Auth::user();

        $bookingData = session('bookingData');
        // Tambahkan validasi untuk memastikan data booking ada
        if (!$bookingData) {
            return redirect()->route('booking.form')->with('error', 'Data booking tidak ditemukan.');
        }

        $paket = $bookingData['paket'] ?? null;
        $request_custom = $bookingData['request_custom'] ?? null;
        $jam = $bookingData['jam'] ?? null;
        $tanggal = $bookingData['tanggal'] ?? null;

        // Definisikan fitur berdasarkan paket
        $paketFitur = [
            'Graduation' => [
                '1 fotografer',
                'Durasi 2 jam pemotretan',
                '20+ foto edit',
                'Background & styling dibantu',
                '✗(tidak untuk) Video dokumentasi',
                '✗(tidak untuk) Indoor studio',
            ],
            'Wedding' => [
                '1 videografer & 1 fotografer',
                'Durasi 6-8 jam dokumentasi',
                'Highlight video cinematic',
                '50+ foto edit high-resolution',
                '✗(tidak untuk) Album cetak',
                '✗(tidak untuk) Drone footage',
            ],
            'Prewedding' => [
                '1 fotografer',
                'Durasi 4 jam pemotretan',
                '30+ foto edit high-resolution',
                'Revisi warna & tone',
                '✗(tidak untuk) Video dokumentasi',
                '✗(tidak untuk) Cetak album',
            ],
            'Lamaran' => [
                '1 fotografer',
                'Durasi 3 jam dokumentasi',
                '25+ foto edit',
                'Softcopy via Google Drive',
                '✗(tidak untuk) Video dokumentasi',
                '✗(tidak untuk) Drone',
            ],
            // Tambahkan paket lainnya kalau ada
        ];

        // Kalau tidak ditemukan, fallback ke kosong
        $fitur = $paketFitur[$paket] ?? [];

        // return response()->json([
        //     'fitur' => $fitur,
        // ]);

        return view('user.receipt', compact('paket', 'request_custom', 'jam', 'tanggal', 'fitur', 'user'));
    }

    public function submitBooking(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'tanggal' => 'required|date',
            'jam' => 'required|string',
            'paket' => 'required|string',
            'request_custom' => 'nullable|string',
        ]);

        // return response()->json([$request->all()]);



        $request_custom = $request->request_custom ?? '-';

        // Check if the date is already booked
        $existingBooking = Booking::where('tanggal', $request->tanggal)->first();

        if ($existingBooking) {
            throw ValidationException::withMessages([
                'tanggal' => ['Tanggal ini sudah dibooking oleh pengguna lain. Silakan pilih tanggal lain.'],
            ]);
        }

        try {
            $booking = Booking::create([
                'user_id' => $request->user_id,
                'tanggal' => $request->tanggal,
                'paket' => $request->paket,
                'jam' => $request->jam,
                'request_custom' => $request_custom, // <- gunakan nilai default jika null
            ]);
        } catch (\Exception $e) {
            // Log the error message
            \Log::error('Booking creation failed: ' . $e->getMessage());

            // Throw a general exception
            throw ValidationException::withMessages([
                'tanggal' => ['Terjadi kesalahan saat memproses booking. Silakan coba lagi.'],
            ]);
        }


        session([
            'bookingData' => [
                'user_id' => $booking->user_id,
                'name' => $booking->name,
                'phone' => $booking->phone,
                'tanggal' => $booking->tanggal,
                'jam' => $booking->jam,
                'paket' => $booking->paket,
                'request_custom' => $booking->request_custom,
            ]
        ]);

        return redirect()->route('receipt')->with('success', 'Booking berhasil disimpan!');
    }

    public function showAdminBookings()
    {
        $user = Auth::user();

        // if ($user->role !== 'admin') {
        //     return redirect()->route('user.booking')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        // }

        // Ambil semua data booking beserta relasi user-nya
        $bookings = Booking::with('user')->get();

        // dd($bookings);

        return view('admin.admin-booking', compact('bookings'));
    }
}