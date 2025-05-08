<!-- resources/views/exports/invoice.blade.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Invoice Booking</title>
  <style>
    body { font-family: sans-serif; }
    h2 { text-align: center; margin-bottom: 30px; }
    .info { margin-bottom: 10px; }
    hr { margin: 20px 0; }
  </style>
</head>
<body>
  <h2>Invoice Booking</h2>
  <p class="info"><strong>Nama:</strong> {{  $booking->user->name }}</p>
  <p class="info"><strong>Tanggal:</strong> {{ $booking->created_at->format('d-m-Y') }}</p>
  <p class="info"><strong>Telepon:</strong> {{ $booking->user->phone }}</p>
  <p class="info"><strong>Booking:</strong> {{ $booking->tanggal }}</p>
  <p class="info"><strong>Paket:</strong> {{ $booking->paket }}</p>
  <p class="info"><strong>Jam:</strong> {{ $booking->jam }}</p>
  <hr>
  <p class="info"><strong>Permintaan:</strong> {{ $booking->request_custom }}</p>
</body>
</html>
