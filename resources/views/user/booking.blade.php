<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Booking Jadwal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .paket-option {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .paket-option:hover {
            transform: scale(1.02);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            /* Efek bayangan sedikit lebih kuat */
        }

        .paket-option.selected {
            background-color: #86D3AB;
            /* Hijau toska muted yang lebih intens */
            color: #2C3E50;
            /* Abu-abu gelap yang bersahaja */
        }

        .paket-option.selected h2,
        .paket-option.selected p,
        .paket-option.selected h3,
        .paket-option.selected ul li {
            color: #2C3E50;
            /* Abu-abu gelap yang bersahaja */
        }

        .paket-option.selected ul li.text-red-500 {
            color: #E53E3E;
            /* Merah yang lebih jelas */
        }

        /* Animasi dropdown */
        .dropdown-enter-active,
        .dropdown-leave-active {
            transition: opacity 0.2s ease, transform 0.2s ease;
        }

        .dropdown-enter-from {
            opacity: 0;
            transform: translateY(-5px);
        }

        .dropdown-enter-to {
            opacity: 1;
            transform: translateY(0);
        }

        .dropdown-leave-from {
            opacity: 1;
            transform: translateY(0);
        }

        .dropdown-leave-to {
            opacity: 0;
            transform: translateY(-5px);
        }
    </style>
    @vite([])
</head>

<body class="bg-gray-200 p-4 sm:p-8 font-sans">

    <div class="max-w-3xl mx-auto p-6 sm:p-8 bg-white rounded-xl shadow-lg space-y-8">
        <div class="">
            <h2 class="text-2xl font-bold text-center sm:text-left text-gray-800 flex-1"><i
                    class="fas fa-calendar-alt mr-2 text-green-500"></i> Booking Jadwal</h2>

            <div
                class="bg-white p-6 rounded-lg shadow-sm mb-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex flex-col sm:flex-row gap-2">
                    <div x-data="calendarFilter()" x-init="initCalendar()" class="w-full sm:w-auto flex gap-2">
                        <!-- Filter Bulan -->
                        <div class="relative w-full sm:w-52">
                            <button @click="openMonth = !openMonth"
                                class="px-4 py-2 bg-gray-100 hover:bg-green-200 text-green-500 font-semibold rounded-md shadow-sm flex items-center justify-between w-full">
                                <span x-text="months[selectedMonth - 1]"></span>
                                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.25 8.27a.75.75 0 01-.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="openMonth" @click.away="openMonth = false"
                                class="absolute mt-2 bg-white border rounded-md shadow-lg w-full z-20 max-h-48 overflow-y-auto">
                                <ul>
                                    <template x-for="(month, index) in months" :key="index">
                                        <li @click="selectMonth(index + 1)"
                                            class="px-4 py-2 hover:bg-gray-100 cursor-pointer" x-text="month"></li>
                                    </template>
                                </ul>
                            </div>
                        </div>

                        <!-- Filter Tahun -->
                        <div x-data="{
                            years: Array.from({ length: 3 }, (_, i) => new Date().getFullYear() + i),
                            selectedYear: new Date().getFullYear(), // Set default ke tahun saat ini
                            updateCalendar() {
                                console.log('Tahun dipilih:', this.selectedYear);
                            }
                        }">
                            <select x-model="selectedYear" @change="updateCalendar"
                                class="px-4 py-2 bg-gray-100 text-green-600 rounded-md shadow-sm">
                                <template x-for="year in years" :key="year">
                                    <option :value="year" x-text="year"></option>
                                </template>
                            </select>
                        </div>

                    </div>
                </div>

                <script>
                    const tanggalBooked = @json($bookedDates);
                </script>

                <!-- Pilih Paket -->
                <div class="relative inline-block text-left w-full sm:w-52">
                    <div x-data="{ openPaket: false, selectedPaket: '🎁 Pilih Paket' }" x-init="$watch('selectedPaket', value => document.getElementById('paketInput').value = value)" class="relative">

                        <button @click="openPaket = !openPaket"
                            class="px-4 py-2 bg-gray-100 hover:bg-green-200 text-green-500 font-semibold rounded-md shadow-sm flex items-center justify-between w-full transition duration-300">
                            <span x-text="selectedPaket"></span>
                            <svg class="w-5 h-5 ml-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.25 8.27a.75.75 0 01-.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-show="openPaket" @click.away="openPaket = false"
                            class="absolute mt-2 bg-white border border-gray-300 rounded-md shadow-lg w-full z-20 overflow-hidden">
                            <ul class="divide-y divide-gray-300">
                                <li @click="selectedPaket='Prewedding'; openPaket=false"
                                    class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-gray-700">Prewedding</li>
                                <li @click="selectedPaket='Wedding'; openPaket=false"
                                    class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-gray-700">Wedding</li>
                                <li @click="selectedPaket='Graduation'; openPaket=false"
                                    class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-gray-700">Graduation</li>
                                <li @click="selectedPaket='Lamaran'; openPaket=false"
                                    class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-gray-700">Lamaran</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div x-data="{ open: false, selected: '⏲ Pilih Jam' }" x-init="$watch('selected', value => $refs.jamInput.value = value)" for="jam"
                    class="relative inline-block text-left w-full sm:w-52">
                    <button @click="open = !open"
                        class="px-4 py-2 bg-gray-100 hover:bg-green-200 text-green-500 font-semibold rounded-md shadow-sm flex items-center justify-between w-full sm:w-52 transition duration-300">
                        <span x-text="selected"></span>
                        <svg class="w-5 h-5 ml-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.25 8.27a.75.75 0 01-.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div x-show="open" @click.away="open = false"
                        class="absolute mt-2 bg-white border border-gray-300 rounded-md shadow-lg w-full sm:w-52 z-20 overflow-hidden">
                        <ul class="divide-y divide-gray-300">
                            <li @click="selected='08.00 - 10.00'; open=false; $nextTick(() => document.getElementById('jamInput').value = selected)"
                                class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-gray-700">
                                <i class="far fa-clock mr-2 text-green-400"></i> 08.00 - 10.00
                            </li>
                            <li @click="selected='12.00 - 14.00'; open=false; $nextTick(() => document.getElementById('jamInput').value = selected)"
                                class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-gray-700">
                                <i class="far fa-clock mr-2 text-green-400"></i> 12.00 - 14.00
                            </li>
                            <li @click="selected='15.00 - 17.00'; open=false; $nextTick(() => document.getElementById('jamInput').value = selected)"
                                class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-gray-700">
                                <i class="far fa-clock mr-2 text-green-400"></i> 15.00 - 17.00
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="grid grid-cols-5 sm:grid-cols-7 gap-3 mt-4" id="tanggalGrid"></div>
        <input type="hidden" id="tanggalInput">

        <!-- Keterangan Warna -->
        <div class="mt-6 flex flex-wrap gap-4 text-sm text-gray-700">
            <div class="flex items-center gap-2">
                <div class="w-4 h-4 rounded bg-green-400"></div>
                <span>Tersedia</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-4 h-4 rounded bg-yellow-400"></div>
                <span>Menunggu Konfirmasi</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-4 h-4 rounded bg-red-400"></div>
                <span>Sudah Dibooking</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-4 h-4 rounded bg-gray-300"></div>
                <span>Tidak Tersedia</span>
            </div>
        </div>



        <form action="{{ route('booking.submit') }}" method="POST" class="space-y-4">
            @csrf

            <input type="hidden" name="user_id" id="userID" value="{{ $user->id }}" />
            <input type="hidden" name="tanggal" id="tanggalInput" />
            <input type="hidden" name="jam" id="jamInput">
            <input type="hidden" name="paket" id="paketInput" />

            <div data-paket="permintaan khusus"
                class="paket-option border rounded-xl shadow-md p-6 cursor-pointer transition duration-300 mb-6">
                <label for="request_custom" class="block text-sm font-medium text-gray-700 mb-2">Permintaan
                    khusus:</label>
                <textarea id="request_custom" name="request_custom" rows="4"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                    placeholder="Tulis permintaan khusus Anda di sini..."></textarea>
            </div>

            <div class="flex justify-between mt-8">
                <a href="{{ route('home') }}"
                    class="bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-8 rounded-md text-lg shadow-md transition duration-300">
                    <i></i> Batal Booking
                </a>

                <button type="submit"
                    class="bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-8 rounded-md text-lg shadow-md transition duration-300">
                    <i></i> Simpan Booking
                </button>
            </div>
        </form>


    </div>

    <script>
        document.querySelectorAll('.paket-option').forEach(option => {
            option.addEventListener('click', () => {
                document.querySelectorAll('.paket-option').forEach(el => el.classList.remove('selected'));
                option.classList.add('selected');

                const paketDipilih = option.getAttribute('data-paket');
                console.log("Paket dipilih:", paketDipilih);

                // Update Alpine.js dropdown value jika ada
                const paketDropdown = document.querySelector('[x-data]');
                if (paketDropdown && paketDropdown.__x) {
                    paketDropdown.__x.$data.selectedPaket = paketDipilih;
                }
            });
        });
    </script>

    <script>
        document.querySelectorAll('.paket-option').forEach(option => {
            option.addEventListener('click', () => {
                document.querySelectorAll('.paket-option').forEach(el => el.classList.remove('selected'));
                option.classList.add('selected');
                const paketDipilih = option.getAttribute('data-paket');
                document.getElementById('input-paket').value = paketDipilih;
            });
        });
    </script>

    <script>
        document.querySelectorAll('.paket-option').forEach(function(option) {
            option.addEventListener('click', function() {
                const selectedHarga = this.getAttribute('data-harga');
                document.getElementById('hargaPaket').value = selectedHarga;
            });
        });
    </script>

    <script>
        function calendarFilter() {
            return {
                openMonth: false,
                selectedMonth: new Date().getMonth() + 1,
                selectedYear: new Date().getFullYear(),
                months: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                    'November', 'Desember'
                ],

                initCalendar() {
                    this.updateCalendar();
                },

                selectMonth(month) {
                    this.selectedMonth = month;
                    this.openMonth = false;
                    this.updateCalendar();
                },

                updateCalendar() {
                    const tanggalGrid = document.getElementById('tanggalGrid');
                    tanggalGrid.innerHTML = ''; // reset grid
                    const daysInMonth = new Date(this.selectedYear, this.selectedMonth, 0).getDate();

                    const today = new Date();
                    const todayString =
                        `${today.getFullYear()}-${String(today.getMonth() + 1).padStart(2, '0')}-${String(today.getDate()).padStart(2, '0')}`;

                    for (let i = 1; i <= daysInMonth; i++) {
                        const day = String(i).padStart(2, '0');
                        const month = String(this.selectedMonth).padStart(2, '0');
                        const fullDate = `${this.selectedYear}-${month}-${day}`;

                        const btn = document.createElement('button');
                        btn.textContent = i;
                        btn.className =
                            "p-3 rounded-md text-white focus:outline-none text-sm sm:text-base transition duration-200";

                        if (tanggalBooked.includes(fullDate)) {
                            btn.classList.add("bg-red-400", "cursor-not-allowed");
                            btn.disabled = true;
                        } else if (fullDate < todayString) {
                            btn.classList.add("bg-red-600",
                                "cursor-not-allowed"); // warna merah untuk tanggal yang sudah lewat
                            btn.disabled = true;
                        } else {
                            btn.classList.add("bg-gray-300", "hover:bg-green-500");
                            btn.onclick = () => handleTanggalClick(i, this.selectedMonth, this.selectedYear);
                        }

                        tanggalGrid.appendChild(btn);
                    }
                }

            }
        }

        function handleTanggalClick(i, month, year) {
            document.querySelectorAll('#tanggalGrid button').forEach(b => {
                if (!b.disabled) b.classList.remove("ring", "ring-4", "ring-green-400");
            });

            const btns = document.querySelectorAll('#tanggalGrid button');
            btns[i - 1].classList.add("ring", "ring-4", "ring-green-400");

            const day = String(i).padStart(2, '0');
            const monthStr = String(month).padStart(2, '0');
            const tanggalLengkap = `${year}-${monthStr}-${day}`;

            document.getElementById('tanggalInput').value = tanggalLengkap;
            console.log('Tanggal dipilih:', tanggalLengkap);
        }
    </script>

    <script>
        // Paket
        paketPilihanDiv?.addEventListener('click', function(event) {
            const clickedElement = event.target.closest('.paket-option');
            if (clickedElement) {
                const paket = clickedElement.dataset.paket;
                pilihPaket(paket, clickedElement);
            }
        });

        function pilihPaket(paket, element) {
            if (selectedPaketElement && selectedPaketElement !== element) {
                selectedPaketElement.classList.remove('selected');
            }
            element.classList.add('selected');
            selectedPaketElement = element;
            paketDipilih = paket;
            document.querySelector('input[name="paket"]').value = paket;
        }
    </script>


    {{-- Validasi Inputan --}}
    <script>
        document.querySelector('form').addEventListener('submit', function(event) {
            const tanggal = document.getElementById('tanggalInput').value;
            const jam = document.getElementById('jamInput').value;
            const paket = document.getElementById('paketInput').value;
            const harga = document.getElementById('hargaPaket').value;

            if (!tanggal || !jam || !paket || !harga) {
                event.preventDefault();
                alert('Semua field harus diisi!');
            }
        });
    </script>

    <script>
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            const tanggal = document.getElementById('tanggalInput').value;

            if (!tanggal) {
                e.preventDefault();
                alert('Silakan pilih tanggal terlebih dahulu sebelum menyimpan booking.');
            }
        });
    </script>

    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>
