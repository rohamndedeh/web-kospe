<?php

use App\Models\Setting;
use Carbon\Carbon;

if (!function_exists('format_rupiah')) {
    function formatRupiah($angka)
    {
        return "Rp " . number_format($angka, 0, ',', '.');
    }
}

if (!function_exists('indo_date')) {
    function indo_date($tanggal)
    {
        return Carbon::parse($tanggal)->locale('id')->translatedFormat('d F Y');
    }
}

if (!function_exists('addMonths')) {
    function addMonths($tanggal, int $bulan = 2): string
    {
        $date = $tanggal instanceof Carbon ? $tanggal : Carbon::parse($tanggal);
        return $date->copy()->addMonths($bulan)->toDateString();
    }
}

if (!function_exists('namaKoperasi')) {
    function namaKoperasi()
    {
        return "Koperasi Haniya Maju Bersama";
    }
}

if (!function_exists('get_setting')) {
    function get_setting($key, $default = null)
    {
        // Gunakan cache untuk performa tinggi
        return cache()->rememberForever("setting.{$key}", function () use ($key, $default) {
            return Setting::where('key', $key)->value('value') ?? $default;
        });
    }
}
