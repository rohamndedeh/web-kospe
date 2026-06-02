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
    startTrackingDuration();
});

document.addEventListener('DOMContentLoaded', () => {
    startTrackingDuration();
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

window.durationInterval;

window.startTrackingDuration = function () {
    // hentikan interval lama
    if (window.durationInterval) {
        clearInterval(window.durationInterval);
    }

    let duration = 0;

    window.durationInterval = setInterval(() => {
        const visitId = localStorage.getItem('visit_id');
        if (!visitId) return;
        duration += 5;
        fetch('/track-duration', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },

            body: JSON.stringify({
                visit_id: visitId,
                duration: duration,
                url: window.location.href,
            })

        });

    }, 5000);

}
