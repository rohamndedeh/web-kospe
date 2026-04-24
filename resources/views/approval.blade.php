<!DOCTYPE html>
<html>

<head>
  <title>Status Permohonan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded-2xl shadow-lg max-w-md w-full text-center">
    <img src="/logo.png" class="w-32 mb-3 mx-auto p-5" alt="">
    @if($status == 'disetujui')
      <div class="text-green-600 text-5xl mb-4">✅</div>
      <h2 class="text-2xl font-bold text-gray-800">Berhasil Disetujui</h2>
      <p class="text-gray-600 mt-2">
        Permohonan cuti telah disetujui.
      </p>

    @elseif($status == 'ditolak')
      <div class="text-red-600 text-5xl mb-4">❌</div>
      <h2 class="text-2xl font-bold text-gray-800">Permohonan Ditolak</h2>
      <p class="text-gray-600 mt-2">
        Permohonan cuti telah ditolak.
      </p>

    @elseif($status == 'already')
      <div class="text-yellow-500 text-5xl mb-4">⚠️</div>
      <h2 class="text-2xl font-bold text-gray-800">Sudah Diproses</h2>
      <p class="text-gray-600 mt-2">
        Permohonan ini sudah pernah diproses sebelumnya.
      </p>
    @endif

    <div class="mt-6 text-sm text-gray-500">
      <p>Nama Pemohon : {{ $izin->nama }}</p>
      <p>Tanggal Approve : {{ $izin->tgl_approve_1 }}</p>
    </div>

  </div>

</body>

</html>