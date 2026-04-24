<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Peromohonan Cuti Karyawan</title>
</head>

<body style="font-family: Arial, sans-serif;">
  <h3>Permohonan Cuti Baru</h3>

  <p>Yth. Bapak/Ibu,</p>

  <p>Terdapat pengajuan cuti dengan detail berikut:</p>

  <ul>
    <li><strong>NIK : </strong> {{ $izin['staff_id'] }}</li>
    <li><strong>Nama : </strong> {{ $izin['nama_staf'] }}</li>
    <li><strong>Divisi : </strong> {{ $izin['divisi'] }}</li>
    <li><strong>Jenis Cuti : </strong> {{ $izin['type'] }}</li>
    <li><strong>Tanggal : </strong> {{ $izin['periode'] }}</li>
    <li><strong>Durasi : </strong> {{ $izin['durasi'] }} hari</li>
    <li><strong>Keterangan : </strong> {{ $izin['alasan'] }}</li>
  </ul>

  <p>
    Sisa cuti saat ini: <strong>{{ $izin['sisa_cuti'] }} hari</strong>
  </p>
  <p>Silahkan segera lakukan tindakan terhadap pengajuan cuti di atas.</p>
  <p>
    <a href="{{ $link_approval }}"
      style="background:#16a34a;color:#fff;padding:10px 15px;text-decoration:none;border-radius:5px;">
      Approve Sekarang
    </a>
    <a href="{{ $link_pengurus }}"
      style="margin-left: 10px;background:#3914dd;color:#fff;padding:10px 15px;text-decoration:none;border-radius:5px;">
      Approve Sekarang + Izin Pengurus
    </a>
  </p>

  <p>Terima kasih.</p>
</body>

</html>