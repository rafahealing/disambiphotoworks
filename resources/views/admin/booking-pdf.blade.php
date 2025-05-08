<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Data Booking</title>
  <style>
    body { font-family: sans-serif; font-size: 12px; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #000; padding: 5px; text-align: left; }
  </style>
</head>
<body>
  <h2>Data Booking Disambiphotoworks</h2>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
      <th>Tanggal Pemesanan</th>
      <th>Nomor Telepon</th>
      <th>Tanggal Booking</th>
      <th>Paket</th>
      <th>Jam</th>
      <th>Permintaan Khusus</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bookings as $index => $booking)
      <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $booking->user->name }}</td>
      <td>{{ $booking->created_at->format('d-m-Y') }}</td>
      <td>{{ $booking->user->phone }}</td>
      <td>{{ $booking->tanggal }}</td>
      <td>{{ $booking->paket }}</td>
      <td>{{ $booking->jam }}</td>
      <td>{{ $booking->request_custom }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
