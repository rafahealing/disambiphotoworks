<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Konfirmasi Pembayaran</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  @vite([])
</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen flex items-center justify-center p-4">

  <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-lg">
    <!-- Heading -->
    <div class="mb-8 text-center">
      <h1 class="text-3xl font-bold text-gray-800 mb-2">Konfirmasi Pembayaran</h1>
      <p class="text-gray-600">Selesaikan pembayaran Anda untuk mengamankan booking.</p>
    </div>

    <!-- Rincian Booking -->
    <!-- Rincian Booking -->
    <div class="bg-white rounded-xl shadow p-6 mb-6 border border-indigo-200">
      <h2>Terima kasih, booking Anda telah diterima!</h2>

      <ul>
        <li><strong>Tanggal:</strong> {{ $tanggal }}</li>
        <li><strong>Jam:</strong> {{ $jam }}</li>
        <li><strong>Paket:</strong> {{ $paket }}</li>
        <p><strong>Permintaan Khusus:</strong> {{ $request_custom }}</p>
      </ul>

    </div>




    <div class="bg-white rounded-xl shadow p-6 mb-6 border border-gray-200">
      <h3 class="text-lg font-semibold text-gray-800 mb-3"><i class="fa-solid fa-money-bill-wave mr-2"></i> Pilih Metode Pembayaran</h3>
      <div class="space-y-3">
        <div>
          <input type="radio" id="transfer" name="metode_pembayaran" value="transfer" class="mr-2">
          <label for="transfer" class="font-medium text-gray-700">Transfer Bank</label>
          <div id="detail-transfer" class="mt-2 p-4 bg-gray-50 rounded-md border border-gray-200 hidden transition-all">
            <p class="font-semibold text-gray-800 mb-1">Transfer ke Rekening Berikut:</p>
            <div class="flex items-center justify-between mb-2">
              <div>
                <p class="font-medium text-indigo-700">BCA</p>
                <p class="text-gray-600">123-456-7890 a.n. PT Photoworks Indonesia <span id="rekBCA" class="hidden">1234567890</span></p>
              </div>
              <button onclick="salin('rekBCA')" class="text-blue-600 font-semibold hover:underline text-sm"><i class="fa-regular fa-copy mr-1"></i> Salin</button>
            </div>
            <div class="flex items-center justify-between">
              <div>
                <p class="font-medium text-indigo-700">Mandiri</p>
                <p class="text-gray-600">098-765-4321 a.n. PT Photoworks Indonesia <span id="rekMandiri" class="hidden">0987654321</span></p>
              </div>
              <button onclick="salin('rekMandiri')" class="text-blue-600 font-semibold hover:underline text-sm"><i class="fa-regular fa-copy mr-1"></i> Salin</button>
            </div>
          </div>
        </div>
        <div>
          <input type="radio" id="ewallet" name="metode_pembayaran" value="e-wallet" class="mr-2">
          <label for="ewallet" class="font-medium text-gray-700">E-Wallet</label>
          <div id="detail-ewallet" class="mt-2 p-4 bg-gray-50 rounded-md border border-gray-200 hidden transition-all">
            <p class="font-semibold text-gray-800 mb-2">Pilih E-Wallet:</p>
            <div class="grid grid-cols-2 gap-2" id="wallet-buttons">
              <button type="button" data-wallet="gopay" class="wallet-button flex items-center justify-center bg-green-100 text-green-600 rounded-md py-2 hover:bg-green-200 transition duration-200 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-1"><i class="fa-brands fa-google-pay mr-2"></i> GoPay</button>
              <button type="button" data-wallet="dana" class="wallet-button flex items-center justify-center bg-blue-100 text-blue-600 rounded-md py-2 hover:bg-blue-200 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1"><i class="fa-solid fa-wallet mr-2"></i> DANA</button>
              <button type="button" data-wallet="ovo" class="wallet-button flex items-center justify-center bg-purple-100 text-purple-600 rounded-md py-2 hover:bg-purple-200 transition duration-200 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-1"><i class="fa-brands fa-ovo mr-2"></i> OVO</button>
              <button type="button" data-wallet="lainnya" class="wallet-button flex items-center justify-center bg-orange-100 text-orange-600 rounded-md py-2 hover:bg-orange-200 transition duration-200 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-1"><i class="fa-solid fa-qrcode mr-2"></i> Lainnya</button>
            </div>
            <p class="text-sm text-gray-500 mt-2">Anda akan diarahkan ke aplikasi E-Wallet setelah konfirmasi.</p>
            <input type="hidden" id="selected-wallet" value="">
          </div>
        </div>
        <div>
          <input type="radio" id="dp" name="metode_pembayaran" value="dp" class="mr-2">
          <label for="dp" class="font-medium text-gray-700">Down Payment (DP)</label>
          <div id="detail-dp" class="mt-2 p-4 bg-gray-50 rounded-md border border-gray-200 hidden transition-all">
            <p class="text-gray-600 mb-2">Anda memilih untuk membayar Down Payment terlebih dahulu.</p>
            <p class="font-semibold text-gray-800">Jumlah DP: <span class="text-green-600">Rp500.000</span></p>
            <p class="text-sm text-gray-500 mt-1">Sisa pembayaran akan diinformasikan kemudian.</p>
            <p class="font-semibold text-gray-800 mt-2 mb-1">Transfer ke Rekening Berikut:</p>
            <div class="flex items-center justify-between mb-2">
              <div>
                <p class="font-medium text-indigo-700">BCA</p>
                <p class="text-gray-600">123-456-7890 a.n. PT Photoworks Indonesia <span id="rekDPBCA" class="hidden">1234567890</span></p>
              </div>
              <button onclick="salin('rekDPBCA')" class="text-blue-600 font-semibold hover:underline text-sm"><i class="fa-regular fa-copy mr-1"></i> Salin</button>
            </div>
            <div class="flex items-center justify-between">
              <div>
                <p class="font-medium text-indigo-700">Mandiri</p>
                <p class="text-gray-600">098-765-4321 a.n. PT Photoworks Indonesia <span id="rekDPMandiri" class="hidden">0987654321</span></p>
              </div>
              <button onclick="salin('rekDPMandiri')" class="text-blue-600 font-semibold hover:underline text-sm"><i class="fa-regular fa-copy mr-1"></i> Salin</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      // Fungsi untuk menyalin teks ke clipboard
      function salin(id) {
        const text = document.getElementById(id).textContent;
        navigator.clipboard.writeText(text).then(() => {
          alert('Nomor rekening berhasil disalin!');
        }).catch(err => {
          console.error('Gagal menyalin: ', err);
        });
      }

      // Menangani pergantian metode pembayaran
      document.addEventListener('DOMContentLoaded', function() {
        const radios = document.querySelectorAll('input[name="metode_pembayaran"]');
        const detailTransfer = document.getElementById('detail-transfer');
        const detailEwallet = document.getElementById('detail-ewallet');
        const detailDp = document.getElementById('detail-dp');

        radios.forEach(radio => {
          radio.addEventListener('change', function() {
            detailTransfer.classList.add('hidden');
            detailEwallet.classList.add('hidden');
            detailDp.classList.add('hidden');

            if (this.value === 'transfer') {
              detailTransfer.classList.remove('hidden');
            } else if (this.value === 'e-wallet') {
              detailEwallet.classList.remove('hidden');
            } else if (this.value === 'dp') {
              detailDp.classList.remove('hidden');
            }
          });
        });

        // Menangani pemilihan e-wallet
        const walletButtons = document.querySelectorAll('.wallet-button');
        const selectedWalletInput = document.getElementById('selected-wallet');

        walletButtons.forEach(button => {
          button.addEventListener('click', function() {
            const selectedWallet = this.getAttribute('data-wallet');
            selectedWalletInput.value = selectedWallet;

            // Highlight wallet yang dipilih
            walletButtons.forEach(btn => btn.classList.remove('ring', 'ring-offset-2', 'ring-green-500'));
            this.classList.add('ring', 'ring-offset-2', 'ring-green-500');
          });
        });
      });
    </script>

    <!-- Status Pembayaran -->
    <div class="bg-yellow-50 rounded-xl shadow p-4 mb-6 border border-yellow-200">
      <h3 class="text-lg font-semibold text-yellow-700 mb-2"><i class="fa-solid fa-circle-exclamation mr-2"></i> Status Pembayaran</h3>
      <p class="text-yellow-600 font-medium">Belum Dibayar</p>
      <p class="text-sm text-gray-500 mt-1">Segera lakukan pembayaran agar booking Anda terkonfirmasi.</p>
    </div>

    <!-- Tombol Konfirmasi -->
    <button
      onclick="konfirmasiPembayaran()"
      class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-xl font-bold text-lg transition duration-300 shadow-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-1">
      <i class="fa-brands fa-whatsapp mr-2"></i> Konfirmasi Pembayaran
    </button>
  </div>

  <script>
    // Simulasi data
    const paket = "{{ $paket }}";
    const request_custom = document.getElementById('request_custom').value;
    const tanggal = "{{ $tanggal }}";
    const nomorWA = "6281298407114";
    const fitur = @json($fitur); // ← Ambil dari backend

    // Tampilkan data
    document.getElementById('paket').textContent = paket;
    document.getElementById('harga').textContent = harga;
    document.getElementById('tanggal').textContent = tanggal;

    const fiturList = document.getElementById('fitur-list');
    fiturList.innerHTML = fitur.map(item => {
      const isNegative = item.startsWith("✗");
      const icon = isNegative ? '<i class="fa-solid fa-xmark mr-2"></i>' : '<i class="fa-solid fa-check mr-2 text-green-500"></i>';
      const className = isNegative ? 'text-red-500' : '';
      return `<li class="${className}">${icon}${item.replace("✓ ", "").replace("✗ ", "")}</li>`;
    }).join('');

    // Fungsi konfirmasi WA
    function konfirmasiPembayaran() {
      const pesan = `Halo admin, saya ingin konfirmasi pembayaran booking:\n\n📦 Paket: ${paket}\n⏰ Jam: ${jam}\n📅 Tanggal Booking: ${tanggal}\n\nSaya sudah melakukan pembayaran.\n\nFitur:\n${fitur.map(f => `- ${f}`).join('\n')}\n\nMohon dicek dan dikonfirmasi. Terima kasih 🙏`;
      const linkWA = `https://wa.me/${nomorWA}?text=${encodeURIComponent(pesan)}`;
      window.open(linkWA, '_blank');
    }

    // Fungsi salin nomor rekening
    function salin(id) {
      const text = document.getElementById(id).textContent;
      navigator.clipboard.writeText(text).then(() => {
        alert(`Nomor rekening berhasil disalin: ${text}`);
      });
    }
  </script>

</body>

</html>