import './bootstrap';
import $ from 'jquery';
import Swal from 'sweetalert2'
import Swiper from 'swiper'

import {
    Navigation,
    Pagination,
    Autoplay
} from 'swiper/modules'

import {
    createIcons,
    icons
} from 'lucide'

// Fungsi agar mudah dipanggil ulang
const initLucide = () => {
    createIcons({
        icons
    });
};

// 1. Jalankan saat navigasi (wire:navigate)
document.addEventListener('livewire:navigated', () => {
    initLucide();
    console.log('Livewire Navigated');
});

Livewire.hook('commit', ({
    succeed
}) => {
    succeed(({
        snapshot,
        effect
    }) => {
        initLucide();
    });
});

// Agar bisa dipanggil dari atribut HTML jika perlu
window.initLucide = initLucide;

window.Swiper = Swiper

Swiper.use([Navigation, Pagination, Autoplay])


window.Swal = Swal

window.$ = $;
window.jQuery = $;

$(function () {
    console.log('jQuery ready')
})
