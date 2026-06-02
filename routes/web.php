<?php

use App\Http\Controllers\IzinController;
use App\Models\AgenTraffic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Str;

Route::livewire('/', 'home')->name('home');
Route::livewire('/profil', 'profil')->name('profil');
Route::livewire('/simpanan-anggota', 'simpanan-anggota')->name('simpanan-anggota');
Route::livewire('/simpanan-sukarela', 'simpanan-sukarela')->name('simpanan-sukarela');
Route::livewire('/simpanan-program', 'simpanan-program')->name('simpanan-program');
Route::livewire('/simpanan-berjangka', 'simpanan-berjangka')->name('simpanan-berjangka');
Route::livewire('/haji-khusus', 'haji-khusus')->name('haji-khusus');
Route::livewire('/haji-khusus/{nama}', 'haji-khusus')->name('hajikhusus');
Route::livewire('/form-haji-khusus', 'form.haji-khusus')->name('form.haji-khusus');
Route::livewire('/form-pembiayaan', 'form.form-pembiayaan')->name('form.pembiayaan');
Route::livewire('/modal-usaha', 'modal-usaha')->name('modal-usaha');
Route::livewire('/modal-usaha/{nama}', 'modal-usaha')->name('modalusaha');
Route::livewire('/multi-jasa', 'multi-jasa')->name('multi-jasa');
Route::livewire('/multi-jasa/{nama}', 'multi-jasa')->name('multijasa');
Route::livewire('/renovasi-rumah', 'renovasi-rumah')->name('renovasi-rumah');
Route::livewire('/renovasi-rumah/{nama}', 'renovasi-rumah')->name('renovasirumah');
Route::livewire('/kantor', 'kantor')->name('kantor');
Route::livewire('/mykospe', 'mykospe')->name('mykospe');
Route::livewire('/daftar-anggota', 'daftar-anggota')->name('daftar-anggota');
Route::livewire('/simprotama', 'simprotama')->name('simprotama');
Route::livewire('/siwak', 'siwak')->name('siwak');
Route::livewire('/keluar-anggota', 'keluar-anggota')->name('keluar-anggota');
Route::livewire('/daily-report', 'daily-report')->name('daily-report');
Route::livewire('/daily-pengurus', 'daily-pengurus')->name('daily-pengurus');
Route::livewire('/form-cuti', 'form-cuti')->name('form-cuti');
Route::livewire('/login', 'admin.login')->name('login');
Route::livewire('/blogs/detail/{id}', 'blogs-detail')->name('blogs.detail');
Route::get('/izin-approval/{id}', [IzinController::class, 'approve']);
Route::get('/izin-pengurus/{id}', [IzinController::class, 'pengurus']);
Route::group(['middleware' => ['auth']], function () {
  Route::livewire('/dashboard', 'admin.dashboard')->name('dashboard');
  Route::livewire('/reminder', 'admin.reminder')->name('reminder');
  Route::livewire('/anggota', 'admin')->name('anggota');
});

Route::livewire('/ref/{nama}', 'home')
  ->middleware(['affiliate', 'traffic'])->name('affiliate');

Route::post('/track-duration', function (Request $request) {
  $url = request('url');
  $agent = new Agent();
  $agen = AgenTraffic::where('id_agen', session('id_agen'))->orderBy('id', 'desc')->first();
  if ($url == $agen->url) {
    $visitId = session('visit_id') ?? request('visit_id');
    AgenTraffic::where('id', $agen->id)
      ->update([
        'duration' => request('duration'),
        'left_at' => now(),
      ]);
    $status = 'update';
  } else {
    $visit = AgenTraffic::create([
      'visit_id' => Str::uuid(),
      'ip' => $request->ip(),
      'browser' => $agent->browser(),
      'browser_version' => $agent->version($agent->browser()),
      'platform' => $agent->platform(),
      'device' => $agent->device(),
      'is_mobile' => $agent->isMobile(),
      'is_desktop' => $agent->isDesktop(),
      'user_agent' => $request->userAgent(),
      'url' => $url,
      'method' => $request->method(),
      'id_agen' => session('id_agen'),
      'duration' => request('duration'),
      'left_at'   => now()
    ]);
    session('visit_id', $visit->visit_id);
    $status = 'create';
  }

  return response()->json([
    'success' => true,
    'status' => $status
  ]);
});
