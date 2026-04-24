<?php

use Livewire\Component;
use App\Models\User;
use App\Models\LoginOtp;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\LoginOtpMail;
use Carbon\Carbon;

new class extends Component {
    public $email = '';
    public $password = '';
    public $otp = '';
    public $step = 1;

    public function render()
    {
        return $this->view()
            ->layout('layouts::login');
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $this->email)->first();

        if (!$user || !Hash::check($this->password, $user->password)) {
            $this->addError('email', 'Email atau password salah');
            return;
        }

        session(['email' => $user->email, 'user_id' => $user->id]); // ⬅ WAJIB ADA

        $otp = random_int(100000, 999999);

        LoginOtp::create([
            'user_id' => $user->id,
            'otp' => Hash::make($otp),
            'expires_at' => Carbon::now()->addMinutes(5),
        ]);

        Mail::to($user->email)->send(new LoginOtpMail($otp));

        // Auth::logout(); // jangan login dulu sebelum OTP valid
        $this->step = 2;
    }

    public function verifyOtp()
    {
        // dd('verifyOtp terpanggil');
        $this->validate([
            'otp' => 'required|digits:6',
        ]);

        $user = User::where('email', session('email'))->first();

        if (!$user) {
            $this->addError('otp', 'User tidak ditemukan');
            return;
        }

        $otpRecord = LoginOtp::where('user_id', $user->id)
            ->where('used', 0)
            ->latest()
            ->first();

        if (!$otpRecord) {
            $this->addError('otp', 'OTP tidak ditemukan');
            return;
        }

        if (Carbon::now()->greaterThan($otpRecord->expires_at)) {
            $this->addError('otp', 'OTP sudah kadaluarsa');
            return;
        }

        if (!Hash::check($this->otp, $otpRecord->otp)) {
            $this->addError('otp', 'OTP salah');
            return;
        }

        // tandai OTP sudah dipakai
        $otpRecord->update([
            'used' => 1,
        ]);

        // 🔥 INI YANG PENTING
        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function resendOtp()
    {
        $otp = random_int(100000, 999999);

        LoginOtp::create([
            'user_id' => session('user_id'),
            'otp' => Hash::make($otp),
            'expires_at' => Carbon::now()->addMinutes(5),
        ]);

        Mail::to(session('email'))->send(new LoginOtpMail($otp));
    }
};
?>

<div class="font-sans text-gray-800 bg-gray-50 min-h-screen flex items-center justify-center p-4 md:p-0"
    x-init="initLucide()">
    <!-- Back to Home Button -->
    <a href="{{ route('home') }}" wire:navigate
        class="absolute top-6 left-6 z-50 flex items-center gap-2 text-gray-600 hover:text-brand-red transition bg-white/80 backdrop-blur px-4 py-2 rounded-full shadow-sm">
        <i data-lucide="arrow-left" class="w-4 h-4"></i> Kembali
    </a>

    <div class="w-full max-w-6xl bg-white rounded-3xl shadow-2xl overflow-hidden flex min-h-[600px]">

        <!-- Left Side: Form -->
        <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center relative">
            <div class="max-w-md mx-auto w-full">
                <!-- Logo -->
                <div class="flex items-center gap-2 mb-8">
                    <img src="{{ asset('logo.png') }}" class="w-12" alt="">
                </div>

                <h2 class="text-3xl font-bold text-gray-900 mb-2">Selamat Datang Kembali!</h2>
                <p class="text-gray-500 mb-8">Silakan masuk untuk mengakses rekening Anda.</p>

                <!-- Login Form -->
                @if($step == 1)
                    <form class="space-y-5" wire:submit="login">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email atau ID Anggota</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i data-lucide="user" class="w-5 h-5 text-gray-400"></i>
                                </div>
                                <input type="text" wire:model="email"
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red outline-none transition"
                                    placeholder="Contoh: anggota@kospe.com">
                                @error('email') <span class="text-red-300 text-sm">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Kata Sandi</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i data-lucide="lock" class="w-5 h-5 text-gray-400"></i>
                                </div>
                                <input type="password" id="password" wire:model="password"
                                    class="w-full pl-10 pr-10 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red outline-none transition"
                                    placeholder="Masukkan kata sandi">
                                <button type="button" id="toggle-password"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-brand-red transition">
                                    <i data-lucide="eye" class="w-5 h-5"></i>
                                </button>
                                @error('password') <span class="text-red-300 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div class="flex justify-end mt-2">
                                <a href="#" class="text-sm text-brand-orange hover:text-brand-red font-medium">Lupa Kata
                                    Sandi?</a>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-brand-red to-brand-orange text-white font-bold py-3 rounded-xl hover:opacity-90 transition shadow-lg shadow-orange-200 transform hover:-translate-y-0.5">
                            Masuk Sekarang
                        </button>
                    </form>
                @else
                    <form class="space-y-5" wire:submit.prevent="verifyOtp">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Masukkan OTP Anda</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">

                                    <i data-lucide="user" class="w-5 h-5 text-gray-400"></i>
                                </div>
                                <input type="text" wire:model="otp"
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red outline-none transition">
                                @error('otp') <span class="text-red-300 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div class="flex justify-end mt-2">
                                <a href="#" wire:click="resendOtp"
                                    class="text-sm text-brand-orange hover:text-brand-red font-medium">Resend
                                    OTP</a>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-brand-red to-brand-orange text-white font-bold py-3 rounded-xl hover:opacity-90 transition shadow-lg shadow-orange-200 transform hover:-translate-y-0.5">
                            Submit
                        </button>
                    </form>
                @endif
            </div>
        </div>

        <!-- Right Side: Image -->
        <div class="hidden md:block w-1/2 bg-brand-red relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?q=80&w=1200&auto=format&fit=crop"
                class="absolute inset-0 w-full h-full object-cover opacity-50 mix-blend-multiply" alt="Background">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/60"></div>

            <div class="absolute bottom-0 left-0 p-12 text-white z-10">
                <div class="bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-2xl mb-6">
                    <div class="flex gap-1 text-brand-yellow mb-2">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="italic text-sm leading-relaxed">"Alhamdulillah, pelayanan KOSPE sangat memuaskan.
                        Transparansi
                        bagi hasil membuat saya tenang menyimpan dana pendidikan anak di sini."</p>
                    <div class="mt-4 flex items-center gap-3">
                        <img src="https://i.pravatar.cc/150?img=32" class="w-10 h-10 rounded-full border-2 border-white"
                            alt="User">
                        <div>
                            <p class="font-bold text-sm">Ibu Hjh. Fatimah</p>
                            <p class="text-xs opacity-80">Anggota sejak 2018</p>
                        </div>
                    </div>
                </div>
                <h2 class="text-3xl font-bold mb-2">Kemandirian Ekonomi Umat</h2>
                <p class="text-white/80">Bersama membangun kesejahteraan dengan prinsip syariah yang amanah.</p>
            </div>
        </div>

    </div>

</div>
<!-- Scripts -->
@push('scripts')
    <script>

        // Toggle Password Visibility
        $('#toggle-password').click(function () {
            const input = $('#password');
            const icon = $(this).find('svg');

            if (input.attr('type') === 'password') {
                input.attr('type', 'text');
                $(this).html('<i data-lucide="eye-off" class="w-5 h-5"></i>');
            } else {
                input.attr('type', 'password');
                $(this).html('<i data-lucide="eye" class="w-5 h-5"></i>');
            }
            initLucide()

        });
    </script>
@endpush