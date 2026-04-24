<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Status Permohonan Cuti</title>
</head>

<body style="font-family: Arial, sans-serif; background:#f9fafb; padding:20px;">

  <div style="max-width:600px;margin:auto;background:#ffffff;padding:25px;border-radius:10px;border:1px solid #e5e7eb;">

    <h2 style="color:#111827;">Status Permohonan Cuti</h2>

    <p>Halo <strong>{{ $izin['nama_staf'] }}</strong>,</p>

    <p>
      Permohonan cuti Anda telah
      <strong style="color: 
                {{ $izin['status'] == 'disetujui' ? '#16a34a' : '#dc2626' }}">
        {{ strtoupper($izin['status']) }}
      </strong>.
    </p>

    <hr style="margin:20px 0;">

    <h4>Detail Permohonan:</h4>

    <table width="100%" style="font-size:14px;">
      <tr>
        <td>Jenis Cuti</td>
        <td>: {{ $izin['type'] }}</td>
      </tr>
      <tr>
        <td>Tanggal</td>
        <td>: {{ $izin['tgl_mulai'] }} s/d {{ $izin['tgl_selesai'] }}</td>
      </tr>
      <tr>
        <td>Durasi</td>
        <td>: {{ $izin['jumlah_hari'] }} hari</td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>: {{ $izin['ket'] }}</td>
      </tr>
    </table>

    <hr style="margin:20px 0;">

    @if($izin['approve_1'] == 'disetujui')
      <p style="color:#16a34a;">
        ✅ Permohonan cuti Anda telah disetujui. Silakan menyesuaikan aktivitas kerja Anda.
      </p>
    @else
      <p style="color:#dc2626;">
        ❌ Permohonan cuti Anda ditolak. Silakan hubungi atasan untuk informasi lebih lanjut.
      </p>
    @endif

    <p style="margin-top:20px;">
      Sisa cuti Anda saat ini:
      <strong>{{ $izin['sisa_cuti'] }} hari</strong>
    </p>

    <hr style="margin:20px 0;">

    <p style="font-size:12px;color:#6b7280;">
      Email ini dikirim otomatis oleh sistem. Mohon tidak membalas email ini.
    </p>

  </div>

</body>

</html>