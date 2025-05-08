<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking - AdminHub</title>
  @vite('resources/css/app.css')
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="flex bg-gray-100 min-h-screen">
  <!-- Sidebar -->
  <!-- <aside id="sidebar" class="w-64 bg-white shadow-lg lg:block hidden">
    <div class="flex items-center gap-2 p-6 border-b border-gray-200">
      <i class='bx bxs-camera text-2xl text-indigo-600'></i>
      <span class="text-xl font-semibold text-indigo-700">Disambiphotoworks</span>
    </div>
    <nav class="p-4">
      <ul class="space-y-2">
        <li class="bg-indigo-100 rounded-l-lg">
          <a href="{{ route('admin') }}" class="flex items-center p-3 font-semibold text-indigo-700">
            <i class='bx bxs-calendar mr-2'></i> Booking
          </a>
        </li>
      </ul>
    </nav>
  </aside> -->

  <!-- Content -->
  <main class="flex-1 p-6 overflow-x-auto">
    <nav class="flex justify-between items-center mb-6 px-2 sm:px-0">
      <div class="flex items-center space-x-2 ">
        <i class='bx bxs-camera text-2xl text-indigo-600'></i>
        <span class="text-xl font-semibold text-indigo-700">Admin_Disambiphotoworks</span>
      </div>
    </nav>


    <!-- Filter Section -->
    <div class="mb-4 flex flex-wrap gap-2 md:space-x-4">
      <input type="text" id="searchBooking" placeholder="Cari Nama Pengguna ..." class="p-2 border rounded w-64" />
      <select id="filterTanggal" class="p-2 border rounded">
        <option value="">Filter Tanggal</option>
        @foreach($tanggalList as $tanggal)
        <option value="{{ $tanggal }}">{{ $tanggal }}</option>
        @endforeach
      </select>

      <select id="filterStatus" class="hidden p-2 border rounded">
        <option value="">Filter Status</option>
        @foreach($statusList as $status)
        <option value="{{ strtolower(str_replace(' ', '_', $status)) }}">{{ $status }}</option>
        @endforeach
      </select>


      <button id="resetFilter" class="p-2 bg-gray-200 rounded hover:bg-gray-300 text-sm">Reset Filter</button>

      <a href="{{ route('booking.export.pdf') }}" class="bg-red-500 text-white px-3 py-2 rounded hover:bg-red-600 text-sm">Export PDF</a>
      <a href="{{ route('booking.export.excel') }}" class="bg-green-500 text-white px-3 py-2 rounded hover:bg-green-600 text-sm">Export Excel</a>

    </div>

    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
      {{ session('success') }}
    </div>
    @endif


    <!-- Booking Table -->
    <section class="bg-white p-6 rounded-xl shadow">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold">Daftar Booking</h2>
      </div>
      <div class="overflow-x-auto">
        <table class="w-full table-auto text-xs text-gray-700">
          <thead class="bg-gray-100 text-left">
            <tr>
              <th class="p-3">Nama</th>
              <th class="p-3">Tanggal Pemesanan</th>
              <th class="p-3">Nomor Telepon</th>
              <th class="p-3">Tanggal Booking</th>
              <th class="p-3">Paket</th>
              <th class="p-3">Jam</th>
              <th class="p-3">Permintaan Khusus</th>
              <th class="p-3">Status</th>
              <th class="p-3 text-center" colspan="2">Aksi</th>
            </tr>
          </thead>
          <tbody id="bookingTableBody">
            @foreach ($bookings as $booking)
            <tr class="border-b hover:bg-gray-50" data-id="{{ $booking->id }}">
              <td class="p-3">{{ $booking->user->name }}</td>
              <td class="p-3">{{ $booking->created_at->format('d-m-Y') }}</td>
              <td class="p-3">{{ $booking->user->phone }}</td>
              <td class="p-3">{{ $booking->tanggal }}</td>
              <td class="p-3">{{ $booking->paket }}</td>
              <td class="p-3">{{ $booking->jam }}</td>
              <td class="p-3">{{ $booking->request_custom }}</td>
              <td class="p-3">
                @if ($booking->status == 'belum_lunas')
                <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs">Belum Lunas</span>
                @else
                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">Lunas</span>
                @endif
              </td>
              <td class="p-3 space-x-2 whitespace-nowrap">
                <button class="editBtn text-blue-600 hover:underline text-sm">Edit</button>
                <button class="deleteBtn text-red-600 hover:underline text-sm">Hapus</button>
              </td>
              <td class="p-3 whitespace-nowrap">
                <a href="{{ route('booking.invoice', $booking->id) }}" class="bg-indigo-500 text-white px-3 py-1 rounded text-sm hover:bg-indigo-600">
                  Invoice
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </section>

    <!-- Edit Modal -->
    <div id="editModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
      <div class="bg-white p-6 rounded-xl shadow w-full max-w-md mx-4">
        <h2 class="text-xl font-semibold mb-4">Edit Booking</h2>
        <form id="editBookingForm" onsubmit="event.preventDefault(); updateBooking();" class="space-y-4">
          @csrf
          <input type="hidden" name="id" id="editId"> <!-- ID booking -->

          <div>
            <label class="text-sm">Tanggal</label>
            <input type="date" name="tanggal" id="editTanggal" class="w-full p-2 border rounded mt-1" required>
          </div>
          <div>
            <label class="text-sm">Paket</label>
            <input type="text" name="paket" id="editPaket" class="w-full p-2 border rounded mt-1" required>
          </div>
          <div>
            <label class="text-sm">Status</label>
            <select name="status" id="editStatus" class="w-full p-2 border rounded mt-1" required>
              <option value="Belum Lunas">Belum Lunas</option>
              <option value="Proses">Proses</option>
              <option value="Lunas">Lunas</option>
            </select>
          </div>
          <div class="flex justify-end space-x-2 pt-4">
            <button type="button" id="cancelEdit" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 text-sm">Batal</button>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 text-sm">Simpan</button>
          </div>
        </form>
      </div>
    </div>

  </main>

  <script>
    function openEditModal(data) {
      // Data: { id, nama, tanggal, paket, status }
      document.getElementById('editId').value = data.id;
      document.getElementById('editTanggal').value = data.tanggal;
      document.getElementById('editPaket').value = data.paket;
      document.getElementById('editStatus').value = data.status;

      document.getElementById('editModal').classList.remove('hidden');
    }

    document.getElementById('cancelEdit').addEventListener('click', function() {
      document.getElementById('editModal').classList.add('hidden');
    });
  </script>


  <script>
    const editModal = document.getElementById('editModal');
    const editTanggal = document.getElementById('editTanggal');
    const editPaket = document.getElementById('editPaket');
    const editStatus = document.getElementById('editStatus');
    const cancelEdit = document.getElementById('cancelEdit');
    const editBookingForm = document.getElementById('editBookingForm');
    const bookingTableBody = document.getElementById('bookingTableBody');
    const searchInput = document.getElementById('searchBooking');
    const filterTanggal = document.getElementById('filterTanggal');
    const filterStatus = document.getElementById('filterStatus');
    const resetFilter = document.getElementById('resetFilter');
    let currentEditRow = null;

    bookingTableBody.addEventListener('click', e => {
      const row = e.target.closest('tr');
      if (!row) return;
      const bookingId = row.dataset.id;

      if (e.target.classList.contains('editBtn')) {
        currentEditRow = row;
        const cells = row.querySelectorAll('td');
        editTanggal.value = cells[3].innerText;
        editPaket.value = cells[4].innerText;
        editStatus.value = cells[7].innerText.trim();
        editModal.classList.remove('hidden');
      }

      if (e.target.classList.contains('deleteBtn')) {
        if (confirm('Yakin ingin menghapus booking ini?')) {
          fetch(`/admin/bookings/${bookingId}`, {
            method: 'DELETE',
            headers: {
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
          }).then(() => row.remove());
        }
      }
    });

    cancelEdit.addEventListener('click', () => editModal.classList.add('hidden'));

    editBookingForm.addEventListener('submit', function(e) {
      // e.preventDefault();
      const bookingId = currentEditRow.dataset.id;

      fetch(`/admin/bookings/${bookingId}`, {
        method: 'PUT',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
          tanggal: editTanggal.value,
          paket: editPaket.value,
          status: editStatus.value
        })
      }).then(res => res.json()).then(() => {
        const cells = currentEditRow.querySelectorAll('td');
        cells[3].innerText = editTanggal.value;
        cells[4].innerText = editPaket.value;
        cells[7].innerHTML = `<span class="${getStatusClass(editStatus.value)} px-2 py-1 rounded">${editStatus.value}</span>`;
        editModal.classList.add('hidden');
      });
    });

    function getStatusClass(status) {
      if (status === 'Belum Lunas') return 'bg-yellow-100 text-yellow-700';
      if (status === 'Proses') return 'bg-blue-100 text-blue-700';
      if (status === 'Selesai') return 'bg-green-100 text-green-700';
      return 'bg-green-100 text-green-700';
    }

    function filterTable() {
      const searchText = searchInput.value.toLowerCase();
      const selectedTanggal = filterTanggal.value;
      const selectedStatus = filterStatus.value;

      Array.from(bookingTableBody.children).forEach(row => {
        const nama = row.children[0].innerText.toLowerCase();
        const tanggal = row.children[3].innerText;
        const status = row.children[7].innerText.trim();

        const matchesSearch = nama.includes(searchText);
        const matchesTanggal = !selectedTanggal || tanggal === selectedTanggal;
        const matchesStatus = !selectedStatus || status.includes(selectedStatus);

        row.style.display = (matchesSearch && matchesTanggal && matchesStatus) ? '' : 'none';
      });
    }

    searchInput.addEventListener('input', filterTable);
    filterTanggal.addEventListener('change', filterTable);
    filterStatus.addEventListener('change', filterTable);
    resetFilter?.addEventListener('click', () => {
      searchInput.value = '';
      filterTanggal.value = '';
      filterStatus.value = '';
      filterTable();
    });
  </script>
</body>

</html>